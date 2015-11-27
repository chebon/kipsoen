<?php

class PrinciplesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /principles
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('principle');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /principles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /principles
	 *
	 * @return Response
	 */
	public function store()



	{

        $fname = Input::get('first_name');
        $mname = Input::get('middle_name');
        $sname = Input::get('surname');
        $phone_number = Input::get('phone_number');
        $id_number = Input::get('id_number');

        $schoolName = "@kipsoen.com";

        $first = $fname[0];

        $email = $first.$mname.$schoolName;

        try
        {
            // Create the user
            $user = Sentry::createUser(array(
                'email'     => $email,
                'password'  => 'principle123',
                'activated' => true,
            ));

            // Find the group using the group id
            $Group = Sentry::findGroupById(6);

            // Assign the group to the user
            $user->addGroup($Group);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            echo 'User with this login already exists.';
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }







	}

	/**
	 * Display the specified resource.
	 * GET /principles/{id}
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
	 * GET /principles/{id}/edit
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
	 * PUT /principles/{id}
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
	 * DELETE /principles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}