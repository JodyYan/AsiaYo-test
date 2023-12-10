<?php

namespace App\Http\Controllers;

use App\Helpers\CurrencyHelper;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
   public function index(Request $request)
   {
      $sourceCurrency = $request->get('source');
      $targetCurrency = $request->get('target');
      $sourceAmount = str_replace( [',', '$'], '', $request->get('amount'));

      $currencies = [
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


       $targetAmount = CurrencyHelper::transfer($sourceCurrency, $targetCurrency, $sourceAmount);
       $targetAmountFormat = CurrencyHelper::format($targetAmount);

      return ['msg' => "success", 'amount' => $targetAmountFormat];

   }
}
