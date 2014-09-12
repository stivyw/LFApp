<?php

App::error(function(Exception $exception, $code)
{
    $pathInfo = Request::getPathInfo();
    $message = $exception->getMessage() ?: 'Exception';
    Log::error("$code - $message @ $pathInfo\r\n$exception");

    if (Config::get('app.debug')) {
        return;
    }

    switch ($code)
    {
        case 403:
            return Response::view('errors/403', array(), 403);

        case 500:
            return Response::view('errors/500', array(), 500);

        default:
            return Response::view('errors/404', array(), $code);
    }
});

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});


Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});


Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});


Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
