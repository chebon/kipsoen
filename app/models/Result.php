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
        'english',
        'kiswahili',
        'biology',
        'chemistry',
        'physics',
        'business_studies',
        'religious_education',
        'agriculture',
        'history',
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