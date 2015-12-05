<?php


Route::group(array('before' => 'student'), function() {

    Route::get('/student', function () {
        return View::make('teacherpanel');
    });

});


    Route::group(array('before' => 'HOD'), function() {

        Route::get('/HOD', function () {
            return View::make('hod');
        });

    });






    Route::group(array('before' => 'parent'), function() {

        Route::get('/paren', function () {
            return View::make('parent');
        });

    });



    Route::get('/secretary', function () {

        return View::make('secretary');

    });


Route::group(array('before' => 'teacher'), function() {

    Route::get('/teacher', function () {
        return View::make('validations');
    });

});






Route::resource('students', 'StudentsController');





Route::resource('ClassResults', 'ClassResultsController');

Route::resource('StudentResults', 'StudentResultsController');

Route::resource('results', 'ResultsController');

Route::resource('examinations', 'ExaminationsController');



Route::resource('teachers', 'TeachersController');

Route::resource('classes', 'ClassesController');



Route::resource('parents', 'ParentTestsController');







Route::resource('group', 'GroupsController');


Route::resource('images', 'ImagesController');
Route::resource('announcements', 'AnnouncementsController');







Route::resource('secretaries', 'SecretariesController');


Route::group(array( 'before' => 'HOD'), function()
{
    Route::resource('create', 'CreatesController');


});








Route::resource('login', 'LoginsController');


Route::get('/about', function()
{
    return View::make('test');
});






Route::get('/logout', function()
{
    Sentry::logout();

    return Redirect::to('/');
});






Route::resource('principles', 'PrinciplesController');


Route::resource('/', 'Home');