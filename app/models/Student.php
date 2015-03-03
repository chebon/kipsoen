<?php

class Student extends \Eloquent {
	protected $fillable = [

        "id",
        "first_name",
        "second_name",
        "last_name",
        "registration_number",
        "parent",
        "date_of_birth",
        "create_at",
        "updated_at"
    ];
}