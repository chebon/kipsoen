<?php

class GroupsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /groups
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Sentry::getUserProvider()->findById(1);

        return $user;

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /groups/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /groups
	 *
	 * @return Response
	 */
	public function store()
	{

    $email = Input::get('email');
        $groupName = Input::get('name');


        $user = Sentry::findUserByLogin($email);

        $group = Sentry::findGroupByName($groupName);


        $user->addGroup($group);
        //return $group;
	}

	/**
	 * Display the specified resource.
	 * GET /groups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = Sentry::getUserProvider()->findById($id);

        //return $user;

        $groups = $user->getGroups();

        return $groups;


	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /groups/{id}/edit
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
	 * PUT /groups/{id}
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
	 * DELETE /groups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}