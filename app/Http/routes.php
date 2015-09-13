<?php

// Default login page
get('/', function () {
  return redirect('/auth/login');
});

$router->group(['namespace' => 'Admin','middleware' => 'auth'], function () {
    resource('admin/student', 'StudentsController');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');