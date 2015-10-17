<?php

class ClassesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /classes
	 *
	 * @return Response
	 */
	public function index()
	{
     return Response::json(Classes::get());

        /*$query    = Student::with(["classes"]);
        $category = Input::get("class_id");
        if ($category)
        {
            $query->where("class_id", $category);
        }
        return $query->get();*/


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /classes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /classes
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

        Classes::create($data);


	}

	/**
	 * Display the specified resource.
	 * GET /classes/{id}
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
	 * GET /classes/{id}/edit
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
	 * PUT /classes/{id}
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
	 * DELETE /classes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}