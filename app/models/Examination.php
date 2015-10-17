<?php

class Examination extends \Eloquent {
	protected $fillable = [


        "examination_name",
        "class_id",
    "start_date",
    "end_date"];



    public function classes()
    {
        return $this->belongsTo('Classes');
    }

}