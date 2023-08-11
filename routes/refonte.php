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

 Route::post('auth/signin','Api\AuthController@login');
 Route::post('auth/signup','Api\AuthController@register');

Route::group([  'middleware' => 'throttle:600000,1'], function () {

    Route::group(['middleware' => 'authkey'], function() {


    /// Route crud redition
    Route::resources([
        'reddition' => 'ReditionController',
        'surcharge'  => 'SurchargesController',
        'validation'=> 'Redition2Controller',
        'redditionUemoi' => 'ReditionUemoiController',
        'surchargeUemoi' => 'SurchargeUemoiController',
        'comptage' => 'ComptagesController',
        'hydrocarbure' => 'HydrocarbureController',
        'cashFlow'=>'CashFlowController',
        'penalite'=>'PenalitesController',
        'douanes'=>'DouaneController',
        'comptageChecked' => 'ComptageCheckedController',
        'violation' =>'ViolationController',
        'transfert'=>'TransfertController',
        'logsAdmin' =>'LogsAdminController',
        'ptac' =>'PtacController',

    ]);
    Route::get('validation-list','Redition2Controller@getListValidation');

    Route::post('auth/login','UsersController@login');
   


    });

});
