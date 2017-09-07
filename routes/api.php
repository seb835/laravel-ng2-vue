<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/quote', [
    'uses' => 'QuoteController@postQuote'
]);

Route::get('/quotes', [
    'uses' => 'QuoteController@getQuotes'
]);

// Put means edit item (replace item directly). This is different from POST which
// would be used when submiting a form on a web page, but we don't need this so
// much when using the API side of Laravel.
Route::put('/quote/{id}', [
    'uses' => 'QuoteController@putQuote'
]);

Route::delete('/quote/{id}', [
    'uses' => 'QuoteController@deleteQuote'
]);
