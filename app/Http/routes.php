<?php

// Default login page
$router->get('/', function () {
  return redirect('/auth/login');
});

$router->group(['namespace' => 'Admin','middleware' => 'auth'], function () {

    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    resource('admin/student', 'StudentsController', [
        "names" => [
            'store'   => 'students_path',
            'show'    => 'students_path',
            'edit'    => 'students_path',
            'update'  => 'students_path',
            'destroy' => 'students_path',
        ],
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
        ]);
});

// Logging in and out
$router->get('/auth/login', ['as' => 'auth_path', 'uses' => 'Auth\AuthController@getLogin']);
$router->post('/auth/login', ['as' => 'auth_path', 'uses' => 'Auth\AuthController@postLogin']);
$router->get('/auth/logout', ['as' => 'auth_path', 'uses' => 'Auth\AuthController@getLogout']);