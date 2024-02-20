<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
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

Route::get('run-command','Api\ValidationController@runSchedule');


Route::group(['prefix' => 'homintec','middleware' => 'throttle:600000,1'], function () {


    /// Route crud redition
    Route::resources([
        'validation'=> 'Redition2Controller',
        'comptage' => 'ComptagesController',
        'penalite'=>'PenalitesController',
        'comptageChecked' => 'ComptageCheckedController',
        'percepteur' =>'PercepteurController'

    ]);

    Route::post('save-percepteur','PercepteurController@savePercepteurForApi');


    //// penlaiter track
    Route::post('track/penalite/store','PenalitesController@trakPenalite');
    Route::post('fiche/techniques/store','TechniquesController@saveFiches');
    Route::get('fiche/techniques/get/','TechniquesController@getficheTechniques');
    Route::get('checked/connexion','TechniquesController@checkedConnexion');
    Route::post('comptage-sms','ComptagesController@comptageSms');
    Route::get('testupdate','CashFlowController@testUpdateRequest');
    Route::post('logs-save','LogController@store');
    Route::post('logs-percepteur','LogController@getPercepteurVacationLog');
    Route::post('login-percepteur','LogController@loginPercepteur');



    Route::post('update-validation','Redition2Controller@updateDataValidatedRecevied');
    Route::post('validation-comptage','Redition2Controller@updateValidation');


});
