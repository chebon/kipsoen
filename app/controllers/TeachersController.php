<?php

class TeachersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /teachers
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Teacher::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /teachers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /teachers
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
        Teacher::create($data);

        $email=Input::get('email');
        //$password=Input::get('password');


        Sentry::register(array(
            'email'=> $email,
            'password'=> 'teacher123',
        ));
	}

	/**
	 * Display the specified resource.
	 * GET /teachers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$teacher = Teacher::findorfail($id);

        return $teacher;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /teachers/{id}/edit
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
	 * PUT /teachers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$teacher = Teacher::findorfail($id);
        $data = Input::all();
        $teacher->update($data);
        return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /teachers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Teacher::destroy($id);

        return Response::json(array('success' => true));
	}

}