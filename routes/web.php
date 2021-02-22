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

Route::get('/', 'HomeController@view');
Route::get('/articledetail/{articleID}', 'HomeController@viewDetail');
Route::get('/login', 'UserController@viewlogin');
Route::post('/login/success', 'UserController@login');
Route::delete('/delete', 'HomeController@deleteuser');
Route::get('/logout', 'UserController@logout');
Route::get('/register','UserController@viewregister');
Route::post('/registersuccess','UserController@register');
Route::get('/percategory/{categoryID}', 'HomeController@percategory');
Route::get('/update','UserController@viewupdate');
Route::post('/updatesuccess', 'UserController@update');
Route::get('/viewaddarticle','ArticleController@viewaddarticle');
Route::post('/postarticle','ArticleController@postarticle');
Route::get('/yourarticles','ArticleController@viewyourarticles');
Route::get('/deleteblog{articleID}','ArticleController@deleteblog');