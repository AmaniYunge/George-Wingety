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
Route::get('/', function()
{
    return View::make('website');
});


Route::get('home', function()
{
    return View::make('home');
});

//  User Management

//validating user during login
Route::get('login',array('as'=>'login', 'uses'=>'UserController@login'));
Route::post('login',array('as'=>'login', 'uses'=>'UserController@validate'));

//loging a user out
Route::get('logout',array('as'=>'logout', 'uses'=>'UserController@logout'));


///profomer invoice route

Route::get('proformaInvoice', function()
{
    return View::make('proformaInvoice.index');
});


///invoice route

Route::get('invoice', function()
{
    return View::make('invoice.index');
});


///purchasingOrder route

Route::get('purchasingOrder', function()
{
    return View::make('purchasingOrder.index');
});


///deliveryNote route

Route::get('deliveryNote', function()
{
    return View::make('deliveryNote.index');
});


///orderForm route

Route::get('orderForm', function()
{
    return View::make('orderForm.index');
});


///requisition route

Route::get('requisition', function()
{
    return View::make('requisition.index');
});


///client route

Route::get('client', function()
{
    return View::make('client.index');
});

Route::any('clients', array('uses' => 'ClientController@index'));
Route::post('client/add', array('uses' => 'ClientController@store'));
Route::get('client/list', array('uses' => 'ClientController@lists'));
Route::get('client/create', array('uses' => 'ClientController@create'));
Route::get('client/edit/{id}', array('uses' => 'ClientController@edit'));

Route::any('client/{id}', array('uses' => 'ClientController@show'));;