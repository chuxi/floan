<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*不需要登录即可浏览的页面 auth is not required*/

Route::get('/', 'HomeController@showWelcome');

Route::get('contactus','HomeController@showContactus');