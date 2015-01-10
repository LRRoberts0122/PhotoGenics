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
	$data = [
		'cartCount' => 0, // cartCount NEEDS to be a session variable. This is for demo purposes, only
		'title' => "PhotoGenics - Home"
		
	];
	return View::make('home')->with($data);
});

/* | TEMPORARY | */
Route::get('/details', function() {
	return View::make('home');
});

Route::get('/details/{item_id}', function($item_id) {	
	// Fetch item data by $item_id...
	// Fetch up to four RANDOM related images from artist...
	
	$data = [
		'cartCount' => 0, // cartCount NEEDS to be a session variable. This is for demo purposes, only
		'title' => "PhotoGenics - Kitty", // Concatenate the Titles
		'item' => [
			'id' => $item_id,
			'source' => 'http://placekitten.com/g/340/340',
			'title' => 'Kitty',
			'artist' => 'Jebus Krist',
			'size' => '12" x 24"',
			'price' => 11.99,
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
		],
		'related' => [
			[
				'link' => '/details/12345',
				'source' => 'http://placekitten.com/g/235/235'
			],
			[
				'link' => '/details/12345',
				'source' => 'http://placekitten.com/g/235/235'
			],
			[
				'link' => '/details/12345',
				'source' => 'http://placekitten.com/g/235/235'
			],
			[
				'link' => '/details/12345',
				'source' => 'http://placekitten.com/g/235/235'
			]
		]
	];
	
	return View::make('details')->with($data);
});

Route::get('/data/{url_var}', function($url_var)
{
	$data["url_var"] = $url_var;
	return View::make('rawr', $data);
});