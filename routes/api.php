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


Route::group(['prefix' => 'homintec','middleware' => 'throttle:600000,1'], function () {

    /// Route crud redition
    Route::resources([
        'reddition' => 'ReditionController',
        'surcharge'  => 'SurchargesController',
        'validation'=> 'Redition2Controller',
        'redditionUemoi' => 'ReditionUemoiController',
        'surchargeUemoi' => 'SurchargeUemoiController',
        'comptage' => 'ComptagesController',
        'hydrocarbure' => 'HydrocarbureController',
        'recette-togo' => 'RecettesTogoController',
        'cashFlow'=>'CashFlowController',
        'penalite'=>'PenalitesController',

    ]);

    //// penlaiter track
    Route::post('track/penalite/store','PenalitesController@trakPenalite');




    Route::post('fiche/techniques/store','TechniquesController@saveFiches');
    Route::get('fiche/techniques/get/','TechniquesController@getficheTechniques');
    Route::get('checked/connexion','TechniquesController@checkedConnexion');

    Route::post('comptage-sms','ComptagesController@comptageSms');

    Route::get('testupdate','CashFlowController@testUpdateRequest');

    Route::post('checked/compatge','ComptagesController@checkedComptage');


    Route::post('logs-save','LogController@store');

});
