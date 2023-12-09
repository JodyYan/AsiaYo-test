<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
   public function index(Request $request)
   {
      $source_currency = $request->get('source');
      $target_currency = $request->get('target');
      $source_amount = str_replace( [',', '$'], '', $request->get('amount'));

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


      $target_amount = floatval($currencies[$source_currency][$target_currency]) * floatval($source_amount);
      $target_amount_format = '$' . number_format($target_amount, 2, '.', ',');

      return ['msg' => "success", 'amount' => $target_amount_format];
 
   }
}
