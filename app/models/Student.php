<?php

class Student extends \Eloquent {
	protected $fillable = [

        "id",
        "first_name",
        "second_name",
        "last_name",
        "registration_number",
        "parent_id",
        "date_of_birth",
        'class_id',
        "create_at",
        "updated_at"
    ];



    public function result()
    {
        return $this->hasMany('Result');
    }

    public function classes()
    {
        return $this->belongsTo('Classes');
    }

    public function parent()
    {
        return $this->belongsTo('ParentTest');
    }
}