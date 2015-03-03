<?php

class ParentTestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /parenttests
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(ParentTest::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /parenttests/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /parenttests
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

        ParentTest::create($data);

        return Response::json(array('success' => true));
	}

	/**
	 * Display the specified resource.
	 * GET /parenttests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$parent = ParentTest::findorfail($id);

        return $parent;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /parenttests/{id}/edit
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
	 * PUT /parenttests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$parent = ParentTest::findorfail($id);
        $data = Input::all();
        $parent->update($data);
        return Response::json(array('success' => true));

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /parenttests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        ParentTest::destroy($id);

        return Response::json(array('success' => true));
	}

}