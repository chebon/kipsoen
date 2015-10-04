<?php

class LoginsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /logins
	 *
	 * @return Response
	 */
	public function index()
	{
		//echo 'welcome you are loged in this is the index function';

        /*return Redirect::to('/index');*/

        //return View::make('sessions.login');

       return View::make('test');






	}

	/**
	 * Show the form for creating a new resource.
	 * GET /logins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /logins
	 *
	 * @return Response
	 */
	public function store()
	{
		//


        try
        {


            $email=Input::get('email');
            $password=Input::get('password');

            // Login credentials
            $credentials = array(
                'email'    => $email,
                'password' => $password,
            );

            // Authenticate the user
            $user = Sentry::authenticateAndRemember($credentials, false);

            //AndRemember
                // echo 'logged in';

          //  return Redirect::to('/index');




            $userget = Sentry::getUser();
            $admin = Sentry::findGroupByName('teachers');
            $users = Sentry::findGroupByName('students');
            $hod = Sentry::findGroupByName('HOD');
            if ($userget->inGroup($admin)) {


              // echo "teachers";
                return Redirect::to('/teacher');


            } elseif ($user->inGroup($users)) {


                echo "students";
            }

            elseif ($user->inGroup($hod)) {

                return Redirect::to('/HOD');

                //echo "HOD";
            }

        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';

          return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';

            return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            echo 'Wrong password, try again.';

            return Redirect::to('/login');

        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';

            return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            echo 'User is not activated.';

            return Redirect::to('/login');
        }

// The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            echo 'User is suspended.';

            return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            echo 'User is banned.';

            return Redirect::to('/login');
        }

	}

	/**
	 * Display the specified resource.
	 * GET /logins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
    {
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /logins/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /logins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /logins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Sentry::logout();

        return Redirect::to('/');
	}

}