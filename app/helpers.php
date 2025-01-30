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
