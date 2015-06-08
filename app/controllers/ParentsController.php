<?php

class ParentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /parents
	 *
	 * @return Response
	 */
	public function index()
	{
       // return Response::json(Parent::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /parents/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /parents
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

        Sentry::register(array(
            'email'=> $email,
            'password'=> 'parent123',
        ));


    }

	/**
	 * Display the specified resource.
	 * GET /parents/{id}
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
	 * GET /parents/{id}/edit
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
	 * PUT /parents/{id}
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
	 * DELETE /parents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}