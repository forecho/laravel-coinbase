<?php

Route::group(['prefix' => 'api',  'middleware' => 'api'], function() {
    Route::post('coinbase/webhook', '\Forecho\Coinbase\Http\Controllers\WebhookController')->name('coinbase-webhook');
});