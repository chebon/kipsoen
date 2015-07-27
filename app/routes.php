<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/try', function()
{
    return View::make('hello');
});



Route::get('/', function()
{
	return View::make('validations');
});

Route::group(array( 'before' => 'auth'), function()
{

Route::resource('students', 'StudentsController');

//Route::resource('teachers', 'TeachersController');

//Route::resource('parents', 'ParentsController');

Route::resource('parent', 'ParentTestsController');

Route::resource('results.students', 'ResultsController');



Route::resource('create', 'CreatesController');

Route::resource('group', 'GroupsController');

Route::resource('groupassignments', 'GroupassignmentsController');

Route::resource('useractiviations', 'UseractiviationsController');

Route::resource('ambenges', 'AmbengesController');

    Route::resource('create', 'CreatesController');




    Route::resource('teachers', 'teachers');

    Route::get('/index', function()
    {
        return View::make('index');
    });
});




Route::resource('login', 'LoginsController');



