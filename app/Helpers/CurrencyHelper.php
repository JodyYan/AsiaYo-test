<?php


namespace App\Helpers;


class CurrencyHelper
{
    const CURRENCIES = [
         "TWD" => [
            "TWD" => 1,
            "JPY" => 3.669,
            "USD" => 0.03281
         ],
         "JPY" => [
            "TWD" => 0.26956,
            "JPY" => 1,
            "USD" => 0.00885
         ],
         "USD" => [
            "TWD" => 30.444,
            "JPY" => 111.801,
            "USD" => 1
         ]
      ];

    public static function transfer($source, $target, $amount)
    {
        return floatval(self::CURRENCIES[$source][$target]) * floatval($amount);
    }

    public static function format($amount)
    {
        return '$' . number_format($amount, 2, '.', ',');
    }
}
