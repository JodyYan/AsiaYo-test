<?php

use App\Helpers\CurrencyHelper;

test('start with dollar sign', function () {
    $targetAmountFormat = CurrencyHelper::format(123.321);

    expect($targetAmountFormat)->toStartWith('$');
});

test('round down', function () {
    $targetAmountFormat = CurrencyHelper::format(123.321);

    expect($targetAmountFormat)->toBe('$123.32');
});

test('round up', function () {
    $targetAmountFormat = CurrencyHelper::format(123.326);

    expect($targetAmountFormat)->toBe('$123.33');
});
