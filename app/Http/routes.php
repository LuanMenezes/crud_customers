<?php

Route::get('users', 'UserController@index');

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');

    Route::auth();

    Route::get('home', 'HomeController@index');

    Route::get('customers', 'CustomersController@index');
    Route::get('customers/new', 'CustomersController@create');
    Route::get('customers/{customer}/edit', 'CustomersController@edit');
    Route::post('customers/save', 'CustomersController@save');
    Route::patch('customers/{customer}', 'CustomersController@update');
    Route::delete('customers/{customer}', 'CustomersController@delete');

});
