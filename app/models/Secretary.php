<?php

class Secretary extends \Eloquent {
	protected $fillable = [
        "first_name",
        "second_name",
        "last_name",
        "email",
        "id_number",
        "phone_number"
    ];
}