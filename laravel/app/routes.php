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

Route::get('/', function()
{
	return View::make('accueil');
});

Route::get('/prestation' ,  function(){
	return View::make('prestation');
});

Route::get('/partenaire' , function(){
	return View::make('Partenaire');
});

Route::get('/contact' , function(){
	return View::make('Contact');
});
