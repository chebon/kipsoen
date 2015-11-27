<?php

class Home extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /home
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('home');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /home/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /home
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






            $users = Sentry::getUser();
            $admin = Sentry::findGroupByName('teachers');
            $student= Sentry::findGroupByName('students');
            $hod = Sentry::findGroupByName('HOD');
            $secretary = Sentry::findGroupByName('secretary');
            $parent = Sentry::findGroupByName('parents');
            $foo = Sentry::findGroupByName('parents');
            $principle = Sentry::findGroupByName('principles');

            if ($users->inGroup($admin)) {



                return Redirect::to('/teacher');


            } elseif ($users->inGroup($student)) {


                return Redirect::to('/student');


                //echo "students";
            }

            elseif ($users->inGroup($hod)) {

                return Redirect::to('/HOD');

                //echo "HOD";
            }

            elseif ($users->inGroup($secretary)) {

                return Redirect::to('/secretary');


            }


            elseif ($users->inGroup($parent)) {

                return Redirect::to('/paren');

                // echo "section. 80";


            }

            elseif ($users->inGroup($foo)) {

                return Redirect::to('/paren');

                // echo "section. 80";


            }

            elseif ($users->inGroup($principle)) {

                return Redirect::to('/principles');

                // echo "section. 80";


            }



        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            return Redirect::to('/')->with('message', 'email required');
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            return Redirect::to('/')->with('message', 'password required');

            // return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)

        {

            return Redirect::to('/')->with('message', 'Wrong password, try again.');


            // return Redirect::to('/login');

        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)


        {

            return Redirect::to('/')->with('message', 'User was not found.');


            //return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            return Redirect::to('/')->with('message', 'User is not activated.');

            //echo 'User is not activated.';

            //return Redirect::to('/login');
        }

// The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {

            return Redirect::to('/')->with('message', 'User is suspended.');
            // echo 'User is suspended.';

            // return Redirect::to('/login');
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {

            return Redirect::to('/')->with('message', 'User is banned.');




        }


    }

	/**
	 * Display the specified resource.
	 * GET /home/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /home/{id}/edit
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
	 * PUT /home/{id}
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
	 * DELETE /home/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}