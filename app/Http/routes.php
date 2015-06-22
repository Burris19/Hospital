<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\Ballot;
use App\Models\detailBallot;

Route::get('getImagen/{id}',function($id){

	$pdf = Ballot::findOrFail($id);	
	$im = new Imagick();
	$im->setResolution(595, 842);
	$im->readImage($pdf->url);
	$im->setImageFormat('jpg');
	header('Content-Type: image/jpeg');
	echo $im;
});

Route::get('getImagen2/{id}',function($id){

	$pdf = detailBallot::findOrFail($id);		
	$im = new Imagick();
	$im->setResolution(595, 842);
	$im->readImage($pdf->url);
	$im->setImageFormat('jpg');
	header('Content-Type: image/jpeg');
	echo $im;
});








Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::post('save/pdf','Admin\BallotsController@save');

Route::group(['prefix'=>'/','namespace'=>'Admin'],function(){
    Route::resource('ballots','BallotsController');
    Route::get('ballotsDetail/{id}','BallotsController@detailBallot');
    Route::get('ballotsDetailSave','BallotsController@detailBallotSave');
    Route::resource('users','UsersController');
    Route::get('pdf/{id}','BallotsController@getPDF');
    Route::get('imagen/{id}','BallotsController@getImagen');
    Route::get('pdfDetail23/{id}','BallotsController@getPDF2');
    Route::get('pdfDetail/{id}','BallotsController@getDetailPDF');



});


Route::controllers([
	'/' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


