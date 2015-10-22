<?php

class StudentResultsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /studentresults
	 *
	 * @return Response
	 */
	public function index()
	{
        $query    = Result::with(["student"]);
        $category = Input::get("student_id");
        if ($category)
        {
            $query->where("student_id", $category);
        }
        return $query->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /studentresults/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /studentresults
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /studentresults/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $result = Result::findorfail($id);

        return $result;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /studentresults/{id}/edit
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
	 * PUT /studentresults/{id}
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
	 * DELETE /studentresults/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}