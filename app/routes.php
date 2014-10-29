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
	$examples = [
		[
			'author'=>'Ján Cifra',
			'name' => 'Národopisné slávnosti (1956)',
			'img'=>'SVK.SNG.UP-DK_1426-10',
			'url'=>'http://webumenia.sk/web/guest/detail/-/detail/id/SVK:SNG.UP-DK_1426-10/Ján%20Cifra',
		],
		[
			'author'=>'Štefan Bednár',
			'name' => 'Podhradské nábrežie (1946-1947)',
			'img'=>'SVK.SNG.O_12',
			'url'=>'http://webumenia.sk/web/guest/detail/-/detail/id/SVK:SNG.O_12/Štefan%20Bednár',
		],
		[
			'author'=>'Andrej Doboš',
			'name' => 'Partizánka Maťuchová (1954)',
			'img'=>'SVK.SNG.O_1195',
			'url'=>'http://webumenia.sk/web/guest/detail/-/detail/id/SVK:SNG.O_1195/Andrej%20Doboš',
		],
		[
			'author'=>'Eduard Pavlačka',
			'name' => 'Generácia (1965)',
			'img'=>'SVK.SNG.UP-DK_1731',
			'url'=>'http://webumenia.sk/web/guest/detail/-/detail/id/SVK:SNG.UP-DK_1731/Eduard%20Pavlačka',
		],
	];

	return View::make('uvod', array('examples'=> $examples));
});

Route::get('/{image}', function($image)
{
	$path = public_path() . '/img/'.$image.'/ImageProperties.xml';
	// dd($path);
	if (!file_exists($path)) {
		return Redirect::to('/')->with('message', 'zadaná cesta bola nesprávna');
    }   

    $properties = simplexml_load_file($path)->attributes();
    $width = $properties->{'WIDTH'};
 
	return View::make('image', array(
		'image'=>$image, 
		'width'=>(int)$properties->{'WIDTH'}, 
		'height'=>(int)$properties->{'HEIGHT'}
	));
});
