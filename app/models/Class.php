<?php

class Classes extends \Eloquent {
	protected $fillable = ['name'];


    public function result()
    {
        return $this->hasMany('Result');
    }

    public function student()
    {
        return $this->hasMany('Student');
    }


    public function examination()
    {
        return $this->hasMany('Examination');
    }

}