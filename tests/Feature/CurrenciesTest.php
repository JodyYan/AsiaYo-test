<?php
namespace Tests\Feature;



it('get currency', function () {

    $queryString = http_build_query(['source' => 'USD', 'target' => 'JPY', 'amount' => '$1,525']);
    $response = $this->getJson('/api/currency?' . $queryString);
    expect($response->getStatusCode())
        ->toBe(200)
        ->and($response->json())        
        ->toEqual([
            'msg' => "success", 'amount' => '$170,496.53',
        ]);;
});
