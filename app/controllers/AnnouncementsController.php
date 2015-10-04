<?php

class AnnouncementsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /announcements
	 *
	 * @return Response
	 */
	public function index()
	{
        return Response::json(Announcement::get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /announcements/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /announcements
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

        Announcement::create($data);
	}

	/**
	 * Display the specified resource.
	 * GET /announcements/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $announcement = Announcement::findorfail($id);

        return $announcement;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /announcements/{id}/edit
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
	 * PUT /announcements/{id}
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
	 * DELETE /announcements/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}