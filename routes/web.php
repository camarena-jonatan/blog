<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
Route::get('/insertar', function () {
    return view('pages.insertar');
});
*/



//Route::get('about', function () {
//	$people =['west','money','gang'];
//    return view('pages.about',compact('people')); // resoueces/views,about.blade.php
//});


Route::group(["prefix" => "views"], function(){
	
	Route::post('uploads',"blogcontroller@upload");
	Route::any('/','blogcontroller@shows');
	Route::any('blog','blogcontroller@shows2')->middleware('auth');;
	Route::any('solo/{cant}','blogcontroller@shows3')->middleware('auth');;
	Route::post("blog/insert",'blogcontroller@store')->middleware('auth');;
	Route::any('search','blogcontroller@shows4')->middleware('auth');;
	Route::get('vistainsert', function (){return view('vistas.insert');});
	Route::get('excel', function (){return view('vistas.excel');});
	Route::get('about/{cant}', function ($cant) {
		return view('pages.about', compact('cant'));
	});

});


Route::get('importExport', 'blogcontroller@importExport');
Route::get('downloadExcel/{type}', 'blogcontroller@downloadExcel');
Route::post('blog/excel', 'blogcontroller@importExcel');

// pagina agenda
Route::get('/agenda', function () {
	return view('pages.agenda');
});





// rutas de app agenda

Route::get('/angularmaster',function(){return view('layouts.angularmaster');});
Route::get('/homeangular',function(){return view('vistas.homeangular');});
Route::get("/insertar",'agendacontroller@index');
Route::any('/consultar','agendacontroller@shows');
Route::get('/grafica','agendacontroller@shows2');
Route::post("/agenda/store",'agendacontroller@store');

Route::get('/west', function () {
	return view('vistas.homeangular');
});






// rutas app blogs



Auth::routes();

//Route::get('/blogs/auth/home', 'HomeController@index');

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
	if (!Request::ajax()){
		Route::any("{slug}", function(){
			return view('layouts.master');
		})->where("slug",".*");
	}
});