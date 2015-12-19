<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LandingController@getIndex');

Route::get('/practice', 'P4Controller@getPractice');
Route::post('/practice', 'P4Controller@postPractice');

Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');

Route::get('/register', 'RegisterController@getRegister');
Route::post('/register','RegisterController@postRegister');

Route::get('/acct', 'AcctController@getAcct');
Route::post('/acct', 'AcctController@postAcct');

Route::get('/project', 'ProjectController@getProject');
Route::post('/project', 'ProjectController@postProject');

Route::get('/project/edit/{id?}', 'ProjectController@getEdit');
Route::post('/project/edit/{id?}', 'ProjectController@postEdit');

Route::get('/project/delete/{id?}', 'ProjectController@getDelete');
Route::post('/project/delete', 'ProjectController@postDelete');

Route::get('/project/show/{id?}', 'ProjectController@getShow');
Route::post('/project/show{id?}', 'ProjectController@postShow');

Route::get('/archive', 'ArchiveController@getProject');
Route::post('/archive', 'ArchiveController@postProject');





Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
