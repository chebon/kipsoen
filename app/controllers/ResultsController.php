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
        $mathematics_cat_one=Input::get('mathematics_cat_one');
        $mathematics_cat_two=Input::get('mathematics_cat_two');
        $mathematics_final=Input::get('mathematics_final');
        $english_cat_one=Input::get('english_cat_one');
        $english_cat_two=Input::get('english_cat_two');
        $english_final=Input::get('english_final');
        $kiswahili_cat_one=Input::get('kiswahili_cat_one');
        $kiswahili_cat_two=Input::get('kiswahili_cat_two');
        $kiswahili_final=Input::get('kiswahili_final');
        $chemistry_cat_one=Input::get('chemistry_cat_one');
        $chemistry_cat_two=Input::get('chemistry_cat_two');
        $chemistry_final=Input::get('chemistry_final');
        $physics_cat_one=Input::get('physics_cat_one');
        $physics_cat_two=Input::get('physics_cat_two');
        $physics_final=Input::get('physics_final');
        $biology_final=Input::get('biology_final');
        $biology_cat_one=Input::get('biology_cat_one');
        $biology_cat_two=Input::get('biology_cat_two');
        $business_studies_final=Input::get('business_studies_final');
        $business_studies_cat_one=Input::get('business_studies_cat_one');
        $business_studies_cat_two=Input::get('business_studies_cat_two');
        $religious_education_final=Input::get('religious_education_final');
        $religious_education_cat_one=Input::get('religious_education_cat_one');
        $religious_education_cat_two=Input::get('religious_education_cat_two');
        $history_final=Input::get('history_final');
        $history_cat_one=Input::get('history_cat_one');
        $history_cat_two=Input::get('history_cat_two');
        $geography_cat_one=Input::get('geography_cat_one');
        $geography_cat_two=Input::get('geography_cat_two');
        $computer_studies_cat_one=Input::get('computer_studies_cat_one');
        $computer_studies_cat_two=Input::get('computer_studies_cat_two');
        $computer_studies_final=Input::get('computer_studies_final');
        $geography_final=Input::get('geography_final');
        $agriculture_final=Input::get('agriculture_final');
        $agriculture_cat_one=Input::get('agriculture_cat_one');
        $agriculture_cat_two=Input::get('agriculture_cat_two');
        $principle_comment=Input::get('principles_comment');

        $mathematics = $mathematics_final+$mathematics_cat_one+$mathematics_cat_two;
        $english = $english_cat_one+$english_cat_two+$english_final;
        $kiswahili=$kiswahili_cat_one+$kiswahili_cat_two+$kiswahili_final;
        $biology = $biology_cat_one+$biology_cat_two+$biology_final;
        $chemistry = $chemistry_cat_one+$chemistry_cat_two+$chemistry_final;
        $physics = $physics_cat_one+$physics_cat_two+$physics_final;
        $business_studies = $business_studies_cat_one+$business_studies_cat_two+$business_studies_final;
        $religious_education = $religious_education_cat_one+$religious_education_cat_two+$religious_education_final;
        $history = $history_cat_one+$history_cat_two+$history_final;
        $agriculture = $agriculture_cat_one + $agriculture_cat_two +$agriculture_final;
        $geography = $geography_cat_one+$geography_cat_two+$geography_final;
        $computer_studies = $computer_studies_cat_one+$computer_studies_cat_two+$computer_studies_final;


        $data= array(
//The one in quotes is the way you have named the fields in your database
            'mathematics'=>$mathematics,
            'mathematics_final'=>$mathematics_final,
            'english'=>$english,
            'english_final'=>$english_final,
            'kiswahili'=>$kiswahili,
            'kiswahili_final'=>$kiswahili_final,
            'biology'=>$biology,
            'biology_final'=>$biology_final,
            'physics'=>$physics,
            'physics_final'=>$physics_final,
            'chemistry'=>$chemistry,
            'chemistry_final'=>$chemistry_final,
            'history'=>$history,
            'history_cat_one'=>$history_cat_one,
            'history_cat_two'=>$history_cat_two,
            'history_final'=>$history_final,
            'agriculture'=>$agriculture,
            'agriculture_cat_one'=>$agriculture_cat_one,
            'agriculture_cat_two'=>$agriculture_cat_two,
            'agriculture_final'=>$agriculture_final,
            'religious_education'=>$religious_education,
            'religious_education_final'=>$religious_education_final,
            'religious_education_cat_one'=>$religious_education_cat_one,
            'religious_education_cat_two'=>$religious_education_cat_two,
            'business_studies'=>$business_studies,
            'business_studies_cat_one'=>$business_studies_cat_one,
            'business_studies_cat_two'=>$business_studies_cat_two,
            'business_studies_final'=>$business_studies_final,
            'examination'=>$examination,
            'first_name'=>$first_name,
            'last_name'=>$middle_name,
            'examination_id'=>$examination,
            'principles_comment'=>$principle_comment,
            'mathematics_cat_one'=>$mathematics_cat_one,
            'mathematics_cat_two'=>$mathematics_cat_two,
            'english_cat_one'=>$english_cat_one,
            'english_cat_two'=>$english_cat_two,
            'kiswahili_cat_one'=>$kiswahili_cat_one,
            'kiswahili_cat_two'=>$kiswahili_cat_two,
            'biology_cat_one'=>$biology_cat_one,
            'biology_cat_two'=>$biology_cat_two,
            'chemistry_cat_one'=>$chemistry_cat_one,
            'chemistry_cat_two'=>$chemistry_cat_two,
            'physics_cat_one'=>$physics_cat_one,
            'physics_cat_two'=>$physics_cat_two,
            'geography'=>$geography,
            'geography_cat_one'=>$geography_cat_one,
            'geography_cat_two'=>$geography_cat_two,
            'geography_final'=>$geography_final,
            'computer_studies'=>$computer_studies,
            'computer_studies_cat_one'=>$computer_studies_cat_one,
            'computer_studies_cat_two'=>$computer_studies_cat_two,
            'computer_studies_final'=>$computer_studies_final,



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