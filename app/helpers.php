<?php

use Illuminate\Support\Str;
use Carbon\Carbon;

function generateUniqueUserId()
{
    $timestamp = Carbon::now()->format('YmdHis');
    $randomString = Str::random(4);
    $userId = 'MNK' . $timestamp . strtoupper($randomString);
    return $userId;
}

function convertCurrency($type){
    $curl = curl_init();
        $apikey=env('EXCHANGE_RATE_API_KEY');
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.exchangeratesapi.io/v1/latest?access_key='.$apikey.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $res = json_decode($response,true);
    if($type == 'codes'){
        $data = array_keys($res['rates']);
    }else{
        $data = $res['rates'][$type];
    }
    return $data;
}