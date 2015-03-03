<?php

class ParentTest extends \Eloquent {

    protected $table = "parents";
	protected $fillable = [
        "id",
        "first_name",
        "second_name",
        "last_name",
        "occupation",
        "id_number",
        "student",
        "phone_number",
        "parenity",
        "created_at",
        "updated_at"
    ];
}