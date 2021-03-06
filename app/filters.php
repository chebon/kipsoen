<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/






Route::filter('inGroup', function($route, $request, $value)
{
    if (!Sentry::check()) return Redirect::route('login');

    // we need to determine if a non admin user
    // is trying to access their own account.
    $userId = Route::input('users');

    try
    {
        $user = Sentry::getUser();

        $group = Sentry::findGroupByName($value);

        if ($userId != Session::get('userId') && (! $user->inGroup($group))  )
        {
            Session::flash('error', trans('users.noaccess'));
            return Redirect::route('home');
        }
    }
    catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
    {
        Session::flash('error', trans('users.notfound'));
        return Redirect::route('login');
    }

    catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
    {
        Session::flash('error', trans('groups.notfound'));
        return Redirect::route('login');
    }
});






Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|-----------------------------------------------1---------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});


/*Route::filter('auth.bonche', function()
{
    if ( ! Sentry::check())
    {
        return Redirect::route('/try');
    }
});*/


Route::filter('auth', function()
{
    $user = Sentry::getUser();
   // $admin = Sentry::findGroupByName('teachers');

    if ( ! Sentry::check())
    {
        return Redirect::to('login');
    }
});



Route::filter('teacher', function()
{
    $user = Sentry::getUser();
    $teacher = Sentry::findGroupByName('teachers');


    if (! Sentry::check())
    {
        return Redirect::to('/')->with('message', 'login to proceed');
    }
    elseif(! $user->inGroup($teacher)){
        return Redirect::to('/')->with('message', 'permission denied');
    }

});



Route::filter('parent', function()
{
    $user = Sentry::getUser();
    $parent = Sentry::findGroupByName('parents');

    if ( ! Sentry::check())
    {
        return Redirect::route('/')->with('message', 'login to proceed');
    }
    elseif(! $user->inGroup($parent)){
        return Redirect::to('/')->with('message', 'permission denied');
    }
});


Route::filter('HOD', function()
{

    $user = Sentry::getUser();
    $hod = Sentry::findGroupByName('HOD');

    if ( ! Sentry::check())
    {
        return Redirect::route('/')->with('message', 'login to proceed');
    }
    elseif(! $user->inGroup($hod)){
        return Redirect::to('/')->with('message', 'permission denied');
    }

});



Route::filter('student', function()
{
    $user = Sentry::getUser();
    $student = Sentry::findGroupByName('students');

    if ( ! Sentry::check())
    {
        return Redirect::to('/')->with('message', 'login to proceed');
    }
    elseif(! $user->inGroup($student)){
        return Redirect::to('/')->with('message', 'permission denied');
    }



});






