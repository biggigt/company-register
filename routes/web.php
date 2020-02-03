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
Route::get('/companies/{id}/view','CompanyController@view')->name('companies.view');
Route::get('/companies/{id}/delete','CompanyController@destroy')->name('companies.destroy');
Route::get('/create','CompanyController@create')->name('companies.create');
Route::post('/create','CompanyController@store')->name('companies.store');
Route::post('/companies/update','CompanyController@update')->name('companies.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// business types
Route::get('/businesstypes', 'BusinesstypeController@index')->name('businesstype.index');
Route::get('/businesstypes/{id}/edit', 'BusinesstypeController@edit')->name('businesstype.edit');
Route::get('/businesstypes/{id}/delete','BusinesstypeController@destroy')->name('businesstype.destroy');
Route::get('/businesstypes/create','BusinesstypeController@create')->name('businesstype.create');
Route::post('/businesstypes/create','BusinesstypeController@store')->name('businesstype.store');
Route::post('/businesstypes/update','BusinesstypeController@update')->name('businesstype.update');
// registry
Route::get('/registrytypes', 'RegistryController@index')->name('registry.viewtypes');
Route::get('/registrytypes/{id}/edit', 'RegistryController@edit')->name('registry.edit');
Route::get('/registrytypes/{id}/delete','RegistryController@destroy')->name('registry.destroy');
Route::get('/registrytypes/create','RegistryController@create')->name('registry.create');
Route::post('/registrytypes/create','RegistryController@store')->name('registry.store');
Route::post('/registrytypes/update','RegistryController@update')->name('registry.update');
Route::post('/addtoregistry','RegistryController@add_to_registry')->name('registry.addcompany');
// facility types
Route::get('/facility', 'FacilityController@index')->name('facility.index');
Route::get('/facility/{id}/edit', 'FacilityController@edit')->name('facility.edit');
Route::get('/facility/{id}/delete','FacilityController@destroy')->name('facility.destroy');
Route::get('/facility/create','FacilityController@create')->name('facility.create');
Route::post('/facility/create','FacilityController@store')->name('facility.store');
Route::post('/facility/update','FacilityController@update')->name('facility.update');

Route::get('/registry/view', 'RegistryController@find_registry')->name('registry.index');