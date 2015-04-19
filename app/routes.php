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

Route::any('client/{id}', array('uses' => 'ClientController@show'));


//invoice routes

Route::any('invoices', array('uses' => 'InvoiceController@index'));
Route::post('invoice/add', array('uses' => 'InvoiceController@store'));
Route::get('invoice/list', array('uses' => 'InvoiceController@lists'));
Route::get('invoice/create', array('uses' => 'InvoiceController@create'));
Route::get('invoice/edit/{id}', array('uses' => 'InvoiceController@edit'));

Route::any('invoice/{id}', array('uses' => 'InvoiceController@show'));

//orderForm routes

Route::any('orderForms', array('uses' => 'OrderFormController@index'));
Route::post('orderForm/add', array('uses' => 'OrderFormController@store'));
Route::get('orderForm/list', array('uses' => 'OrderFormController@lists'));
Route::get('orderForm/show/{id}', array('uses' => 'OrderFormController@show'));
Route::get('orderForm/showinfo/{id}', array('uses' => 'OrderFormController@showinfo'));
Route::get('orderForm/for_client/{id}', array('uses' => 'OrderFormController@ofForClient'));
Route::get('orderForm/create', array('uses' => 'OrderFormController@create'));
Route::get('orderForm/edit/{id}', array('uses' => 'OrderFormController@edit'));
Route::get('orderForm/delete/{id}', array('uses' => 'OrderFormController@destroy'));

Route::get('order/particular/{id}', array('uses' => 'OrderFormController@particulars'));

Route::any('orderForm/{id}', array('uses' => 'OrderFormController@show'));


//particulars routes

Route::any('proformas', array('uses' => 'ProformaInvoiceController@index'));
Route::post('proforma/add', array('uses' => 'ProformaInvoiceController@store'));
Route::get('proforma/list', array('uses' => 'ProformaInvoiceController@lists'));
Route::get('proforma/create', array('uses' => 'ProformaInvoiceController@create'));
Route::get('proformas/edit/{id}', array('uses' => 'ProformaInvoiceController@edit'));
Route::get('proforma/preview/{id}', array('uses' => 'ProformaInvoiceController@preview'));

Route::any('proformas/{id}', array('uses' => 'ProformaInvoiceController@show'));


//particulars routes

Route::any('particulars', array('uses' => 'ParticularController@index'));
Route::post('particular/add', array('uses' => 'ParticularController@store'));
Route::get('particular/list', array('uses' => 'ParticularController@lists'));
Route::get('particular/create', array('uses' => 'ParticularController@create'));
Route::get('particular/edit/{id}', array('uses' => 'ParticularController@edit'));

Route::any('particular/{id}', array('uses' => 'ParticularController@show'));