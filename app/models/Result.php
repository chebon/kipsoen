<?php

class Result extends \Eloquent {

    protected $table = 'results';
	protected $fillable = [
        'id',
        'student_id',
        'first_name',
        'examination_id',
        'last_name',
        'mathematics',
        'mathematics_cat_one',
        'mathematics_cat_two',
        'mathematics_final',
        'english',
        'english_cat_one',
        'english_cat_two',
        'english_final',
        'kiswahili',
        'kiswahili_cat_one',
        'kiswahili_cat_two',
        'kiswahili_final',
        'biology',
        'biology_cat_one',
        'biology_cat_two',
        'biology_final',
        'chemistry',
        'chemistry_cat_one',
        'chemistry_cat_two',
        'chemistry_final',
        'physics',
        'physics_cat_one',
        'physics_cat_two',
        'physics_final',
        'class_id',
        'business_studies',
        'business_studies_cat_one',
        'business_studies_cat_two',
        'business_studies_final',
        'religious_education',
        'religious_education_cat_one',
        'religious_education_cat_two',
        'religious_education_final',
        'agriculture',
        'agriculture_cat_one',
        'agriculture_cat_two',
        'agriculture_final',
        'history',
        'history_cat_one',
        'history_cat_two',
        'history_final',
        'total',
        'principles_comment',
        'class_teacher_comment',
        'created_at',
        'updated_at'
    ];





    public function student()
    {
        return $this->belongsTo('Student');
    }

    public function classes()
    {
        return $this->belongsTo('Classes');
    }



}