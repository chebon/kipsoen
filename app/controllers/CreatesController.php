<?php

class CreatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /creates
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /creates/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /creates
	 *
	 * @return Response
	 */
	public function store()
	{
        try {


            $email=Input::get('email');
            //$password=Input::get('password');
            $activated=Input::get('activated');
            $group=Input::get('group');



            $user =  Sentry::createUser(array(
                'email'=> $email,
                'password'=> 'password123',
                'activated' => true,
            ));


            // Find the group using the group id
            $adminGroup = Sentry::findGroupById($group);

            // Assign the group to the user
            $user->addGroup($adminGroup);
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
	 * GET /creates/{id}
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
	 * GET /creates/{id}/edit
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
	 * PUT /creates/{id}
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
	 * DELETE /creates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}