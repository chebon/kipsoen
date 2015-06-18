<?php

class GroupassignmentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /groupassignments
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'bonche';
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /groupassignments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /groupassignments
	 *
	 * @return Response
	 */
	public function store()
	{
        try
        {

            $user_id=Input::get('user_id');
            $group_id=Input::get('group_id');
            // Find the user using the user id
            $user = Sentry::findUserById($user_id);

            // Find the group using the group id
            $adminGroup = Sentry::findGroupById($group_id);

            // Assign the group to the user
            if ($user->addGroup($adminGroup))
            {
               echo 'success';
            }
            else
            {
                // Group was not assigned
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }
	}

	/**
	 * Display the specified resource.
	 * GET /groupassignments/{id}
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
	 * GET /groupassignments/{id}/edit
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
	 * PUT /groupassignments/{id}
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
	 * DELETE /groupassignments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}