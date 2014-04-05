<?php

// A) First -> Set Home Route
 Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));
// B) Then -> Return whatever you want (for rReference folow ./vendor/rydurham/sentinel/src/routs.php)
Route::get( '/' ,  array('as' => 'Sentinel\login', 'uses' => 'Sentinel\SessionController@create'), function()
{
	return View::make('Sentinel::users.create');
}
);
/* An other route example
// B.1) Example
Route::get( 'bar' ,  array('as' => 'Sentinel\register', 'uses' => 'Sentinel\UserController@register'), function()
{
	return View::make('Sentinel::users.register');
}
);
*/