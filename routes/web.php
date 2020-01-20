<?php

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
})->name('home');

Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{id}/edit','CompanyController@edit')->name('companies.edit');
Route::get('/companies/{id}/delete','CompanyController@destroy')->name('companies.destroy');
Route::get('/create','CompanyController@create')->name('companies.create');
Route::post('/create','CompanyController@store')->name('companies.store');
Route::post('/companies/update','CompanyController@update')->name('companies.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/businesstypes', 'BusinesstypeController@index')->name('businesstype.index');
Route::get('/businesstypes/{id}/edit', 'BusinesstypeController@edit')->name('businesstype.edit');
Route::get('/businesstypes/{id}/delete','BusinesstypeController@destroy')->name('businesstype.destroy');
Route::get('/businesstypes/create','BusinesstypeController@create')->name('businesstype.create');
Route::post('/businesstypes/create','BusinesstypeController@store')->name('businesstype.store');
Route::post('/businesstypes/update','BusinesstypeController@update')->name('businesstype.update');
