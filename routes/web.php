<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function () {

    Route::post('reddition2','web\ReditionWebController@redition2')->name('redition2.searh-post');
    Route::get('redition2-search','web\ReditionWebController@reditionSearch')->name('redition2.search');
    Route::get('redition2-day','web\ReditionWebController@reditionByDay')->name('redition2.day');
    Route::get('redition2-month','web\ReditionWebController@reditionByMonth')->name('redition2.month');


    Route::get('redition-uemoi','web\ReditionWebController@reditionuemoaInter')->name('redition.uemoi.list.sites');
    Route::get('redition-uemoi-day','web\ReditionWebController@reditionuemoiByDays')->name('redition.uemoi.listDay.sites');
    Route::get('redition-uemoi-month','web\ReditionWebController@reditionuemoiByMonth')->name('redition.uemoi.listMonth.sites');

    Route::get('redition-uemoi-search','web\ReditionWebController@reditionuemoaSearch')->name('redition.uemoi.search.sites');

    Route::get('surchages/{site}','web\SurchargeWebController@suchargeView')->name('sucharge.list.sites');
    Route::get('surchages2/{site}','web\SurchargeWebController@suchargeView2')->name('sucharge2.list.sites');
    Route::get('surchages/uemoi/{site}','web\SurchargeWebController@suchargeVieUemio')->name('suchargeVieUemio.list.sites');


    Route::post('hydro-date','web\ReditionWebController@hydrocarbureByDate')->name('hydro.post-seach');
    Route::get('hydro-search','web\ReditionWebController@hydrocarbureSearch')->name('hydro.list.search');

    Route::get('hydro-day','web\ReditionWebController@hydrocarbureByDays')->name('hydro.list.days');
    Route::get('hydro-month','web\ReditionWebController@hydrocarbureByMonth')->name('hydro.list.month');



    Route::get('recettetogo/{site}','web\ReditionWebController@recetteTogo')->name('recette.togo.sites');

    Route::get('test','TestController@test');

    Route::get('/', 'HomeController@index')->name('home');

    Route::resources([
        'users'=>'UsersController',
    ]);



    Route::get('surcharge-manuel/create/index','SurchagesManuelController@createIndex')->name('surcharge-manuel.create-index');

    Route::get('surcharge-manuel/create/{voie?}','SurchagesManuelController@create')->name('surcharge-manuel.create');
    Route::get('surcharge-manuel/{site?}','SurchagesManuelController@index')->name('surcharge-manuel.index');
    Route::get('surcharge-manuel-request','SurchagesManuelController@requests')->name('surcharge-manuel.request');
    Route::post('surcharge-manuel/{voie?}','SurchagesManuelController@store')->name('surcharge-manuel.store');
    Route::get('surcharge-manuel/edit/{surcharge_manuel}','SurchagesManuelController@edit')->name('surcharge-manuel.edit');
    Route::delete('surcharge-manuel/destroy/{surcharge_manuel}/{site?}','SurchagesManuelController@destroy')->name('surcharge-manuel.destroy');


    Route::put('surcharge-manuel/update/{surcharge_manuel}  ','SurchagesManuelController@update')->name('surcharge-manuel.update');





    Route::get('surcharge-manuel-site','SurchagesManuelController@rapportMensuelsChoice')->name('surcharge.get-site');

    Route::prefix('cashFlow')->group(function () {
    Route::get('day/web','CashFlowController@rapportJoursChoice')->name('cash-flow.day');
    Route::get('month/web','CashFlowController@rapportMensuelsChoice')->name('cash-flow.month');

    Route::get('index/web/day','CashFlowController@indexDay')->name('cash-flow.indexDay');

    Route::get('index/web/month','CashFlowController@indexMonth')->name('cash-flow.indexMonth');
    });


    Route::post('recette-save','RecetteController@store')->name('recette.store');
    Route::get('recette-index/{voie?}','RecetteController@index')->name('recette.index');
    Route::get('recette-create/{voie?}','RecetteController@create')->name('recette.create');


    Route::get('recette/create/index','RecetteController@createIndex')->name('recette.create-index');

    Route::get('recette/{id}','RecetteController@show')->name('recette.show');
    Route::put('recette/{id}','RecetteController@update')->name('recette.update');
    Route::delete('recette/{id}','RecetteController@destroy')->name('recette.destroy');


    Route::get('recette-get-month','RecetteController@getByMonth')->name('recette.getByMonth');

    Route::get('recette-view-month','RecetteController@rapportMensuelsChoice')->name('recette.getByMonth.action');








    Route::post('site-save','SiteController@store')->name('site.store');
    Route::get('site-index','SiteController@index')->name('site.index');
    Route::get('site-create','SiteController@create')->name('site.create');

    Route::get('site/{id}','SiteController@show')->name('site.show');
    Route::put('site/{id}','SiteController@update')->name('site.update');







    Route::post('voie-save','VoieController@store')->name('voie.store');
    Route::get('voie-index','VoieController@index')->name('voie.index');
    Route::get('voie-create','VoieController@create')->name('voie.create');

    Route::get('voie/{id}','VoieController@show')->name('voie.show');
    Route::put('voie/{id}','VoieController@update')->name('voie.update');






    Route::post('sens-save','SensController@store')->name('sens.store');
    Route::get('sens-index','SensController@index')->name('sens.index');
    Route::get('sens-create','SensController@create')->name('sens.create');

    Route::get('sens/{id}','SensController@show')->name('sens.show');
    Route::put('sens/{id}','SensController@update')->name('sens.update');





    Route::post('percepteur-save','PercepteurController@store')->name('percepteur.store');
    Route::get('percepteur-index','PercepteurController@index')->name('percepteur.index');
    Route::get('percepteur-create','PercepteurController@create')->name('percepteur.create');

    Route::get('percepteur/{id}','PercepteurController@show')->name('percepteur.show');
    Route::put('percepteur/{id}','PercepteurController@update')->name('percepteur.update');







    Route::post('vacation-save','VacationController@store')->name('vacation.store');
    Route::get('vacation-index','VacationController@index')->name('vacation.index');
    Route::get('vacation-create','VacationController@create')->name('vacation.create');

    Route::get('vacation/{id}','VacationController@show')->name('vacation.show');
    Route::put('vacation/{id}','VacationController@update')->name('vacation.update');


    /// log percepteur

    Route::get('logs','LogController@index')->name('logs.index');


    #Route::resources([]);

});

Auth::routes();


