<?php

class Teacher extends \Eloquent {
	protected $fillable = [
        "id",
        "first_name",
        "second_name",
        "last_name",
        "phone_number",
        "id_number",
        "major_one",
        "major_two",
        "major_three",
        "created_at",
        "updated_at"
    ];
}