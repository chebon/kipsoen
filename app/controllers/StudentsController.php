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
        $query    = Student::with(["classes"]);
        $class = Input::get("class_id");
        if ($class)
        {
            $query->where("class_id", $class);
        }
        return $query->get();



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




        $email=Input::get('email');

       // $reg = Input::get('registration_number');

       // $email = Input::merge(array('registration_number', 'SomeNewData'));

        $user =  Sentry::createUser(array(
            'email'=> $email,
            'password'=> 'password123',
            'activated' => true,
        ));

        $user = Sentry::findUserByLogin($email);

        $group = Sentry::findGroupByName('students');


        $user->addGroup($group);

        Student::create($data);

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