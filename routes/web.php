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

    Route::get('cashFlow/web','CashFlowController@index')->name('cash-flow.index');

    Route::get('redition-uemoi','web\ReditionWebController@reditionuemoaInter')->name('redition.uemoi.list.sites');
    Route::get('redition-uemoi-day','web\ReditionWebController@reditionuemoiByDays')->name('redition.uemoi.listDay.sites');
    Route::get('redition-uemoi-month','web\ReditionWebController@reditionuemoiByMonth')->name('redition.uemoi.listMonth.sites');

    Route::post('redition-uemoi-search','web\ReditionWebController@reditionuemoaSearch')->name('redition.uemoi.search.sites');

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

    Route::resource('users', 'UsersController');

});

Auth::routes();


