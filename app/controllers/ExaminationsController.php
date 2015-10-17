<?php

class ExaminationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /examinations
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Examination::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /examinations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /examinations
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();



        Examination::create($data);

       // return Response::json(['success' => true]);


        $class = Input::get('class_id');

        $users = DB::table('students')->where('class_id', '=', $class)->get();




       // $results = json_decode($users);
        foreach ($users as $result){

            Result::create([
                'student_id' => $result->id,
                'first_name' => $result->first_name,
                'last_name' => $result->last_name,

                'class_id' => $result->class_id

            ]);
        }

        return $users;






	}

	/**
	 * Display the specified resource.
	 * GET /examinations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$examination = Examination::findorfail($id);
            return $examination;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /examinations/{id}/edit
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
	 * PUT /examinations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$examination = Examination::findorfail($id);
        $data = INPUT::all();
        $examination->update($data);
        return Response::json(['success' => true]);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /examinations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Examination::destroy($id);

        return Response::json(['success' => true ]);
	}

}