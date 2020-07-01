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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'homintec'], function () {

    /// Route crud redition
    Route::resources([
        'reddition' => 'ReditionController',
        'surcharge'  => 'SurchargesController',
        'reddition2'=> 'Redition2Controller',
        'redditionUemoi' => 'ReditionUemoiController',
        'surchargeUemoi' => 'SurchargeUemoiController',
        'comptage' => 'ComptagesController'
    ]);

    Route::post('fiche/techniques/store','TechniquesController@saveFiches');
    Route::get('fiche/techniques/get/','TechniquesController@getficheTechniques');
    Route::get('checked/connexion','TechniquesController@checkedConnexion');

});

