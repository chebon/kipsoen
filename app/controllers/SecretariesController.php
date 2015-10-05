<?php

class SecretariesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /secretaries
	 *
	 * @return Response
	 */
	public function index()
	{
        //return View::make('secretary');

        return Response::json(Secretary::get());


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /secretaries/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /secretaries
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::all();
        Secretary::create($data);

        $email=Input::get('email');
        //$password=Input::get('password');


        Sentry::register(array(
            'email'=> $email,
            'password'=> 'secretary123',
            'activated' => true,
        ));


        $user = Sentry::findUserByLogin($email);

        $group = Sentry::findGroupByName('secretary');


        $user->addGroup($group);

        return Response::json(array('success' => true));
	}

	/**
	 * Display the specified resource.
	 * GET /secretaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $secretary = Secretary::findorfail($id);

        return $secretary;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /secretaries/{id}/edit
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
	 * PUT /secretaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $secretary = Secretary::findorFail($id);
        $data = Input::all();
        $secretary->update($data);




        return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /secretaries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}