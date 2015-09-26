<?php

class StudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /students
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Student::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /students/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /students
	 *
	 * @return Response
	 */
	public function store()
	{
	     $data = Input::all();

        Student::create($data);


        $email=Input::get('email');

        $user =  Sentry::createUser(array(
            'email'=> $email,
            'password'=> 'password123',
            'activated' => true,
        ));

        $user = Sentry::findUserByLogin($email);

        $group = Sentry::findGroupByName('students');


        $user->addGroup($group);

        return Response::json(array('success' => true));

	}

	/**
	 * Display the specified resource.
	 * GET /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $student = Student::findorfail($id);

        return $student;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /students/{id}/edit
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
	 * PUT /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        $student = Student::findorFail($id);
        $data = Input::all();
        $student->update($data);


        $user = Sentry::findUserById($id);

         $group = Sentry::findGroupByName('students');


        $user->addGroup($group);

        return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Student::destroy($id);

        return Response::json(array('success' => true));

	}

}