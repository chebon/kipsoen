<?php

class ResultsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /results
	 *
	 * @return Response
	 */
	public function index()
	{
		//return Response::json(Result::get());

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
	 * GET /results/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /results
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$data = Input::all();
        Result::create($data);*/

        $reply =  "really nigger";

        return $reply;


	}

	/**
	 * Display the specified resource.
	 * GET /results/{id}
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
	 * GET /results/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//sdfbdssa
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /results/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$result = Result::findorfail($id);
       // $data =Input::all();

        $first_name=Input::get('first_name');
        $middle_name=Input::get('last_name');
        $examination=Input::get('examination_id');
        $mathematics=Input::get('mathematics');
        $english=Input::get('english');
        $kiswahili=Input::get('kiswahili');
        $chemistry=Input::get('chemistry');
        $physics=Input::get('physics');
        $biology=Input::get('biology');
        $business_studies=Input::get('business_studies');
        $religious_education=Input::get('religious_education');
        $history=Input::get('history');
        $agriculture=Input::get('agriculture');
        $data= array(
//The one in quotes is the way you have named the fields in your database
            'mathematics'=>$mathematics,
            'english'=>$english,
            'kiswahili'=>$kiswahili,
            'biology'=>$biology,
            'physics'=>$physics,
            'chemistry'=>$chemistry,
            'history'=>$history,
            'agriculture'=>$agriculture,
            'religious_education'=>$religious_education,
            'business_studies'=>$business_studies,
            'examination'=>$examination,
            'first_name'=>$first_name,
            'last_name'=>$middle_name,
            'examination_id'=>$examination,


            'total'=>$mathematics+$english+$kiswahili+$biology+$physics+$chemistry+$history+$agriculture+$religious_education+$business_studies
        );


        $result->update($data);
        return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /results/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Result::destroy($id);
        return Response::json(array('success' => true));
	}

}