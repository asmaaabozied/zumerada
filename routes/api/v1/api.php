<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '{locale}'], function () {
    Route::post('/testing', 'api\v1\AuthController@testing');
    Route::middleware(['auth:api'])->post('/notify', 'api\v1\NotificationController@sendNotify');

});




