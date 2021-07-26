<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('years','YearController@index')->name('Years.index');
Route::get('years/{year}','YearController@show')->name('Years.show');

Route::get('years/{year}/regions','RegionController@indexByYear')->name('Region.indexByYear');
Route::get('years/{year}/regions/{name}','RegionController@showByYearName')->name('Region.showByYearName');

Route::get('years/{year}/constituencies','ConstituencyController@indexByYear')->name('Constituency.indexByYear');
Route::get('years/{year}/constituencies/{name}','ConstituencyController@showByYearName')->name('Constituency.showByYearName');

Route::get('regions','RegionController@index')->name('Region.index');
Route::get('regions/{region}','RegionController@show')->name('Region.show');

Route::get('constituencies','ConstituencyController@index')->name('Constituency.index');
Route::get('constituencies/{constituency}','ConstituencyController@show')->name('Constituency.show');

Route::get('parties','PartyController@index')->name('party.index');
Route::get('parties/{party}','PartyController@show')->name('party.show');

Route::get('parties/{party}/representatives','RepresentativeController@indexByParty')->name('Representative.indexByParty');
Route::get('parties/{party}/representatives/{name}','RepresentativeController@showByPartyName')->name('Representative.showByPartyName');

Route::get('representatives','RepresentativeController@index')->name('Representative.index');
Route::get('representatives/{representative}','RepresentativeController@show')->name('Representative.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
