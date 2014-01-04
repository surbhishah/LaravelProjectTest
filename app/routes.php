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
	return View::make('hello');
});

//Route::get('authors', array('uses' => 'authors@index'));
//authorsi = what you have to type in the URL
// AuthorsController is the Controller to which request is to be tranferred
#Route::Controller('authorsi','AuthorsController@getIndex');



Route::get('authors',array('as'=>'authors_route_name', 'uses'=>'AuthorsController@getIndex'));
Route::get('author/{id}',array('as'=>'author_route_name','uses'=>'AuthorsController@getAuthor')) ;
Route::get('authors/new',array('as'=>'author_new_route_name','uses'=>'AuthorsController@getRegisterNew'));
Route::post('authors/create',array('before'=>'csrf',  'uses'=>'AuthorsController@postCreate'));
Route::get('author/edit/{id}',array('as'=>'author_edit_name','uses'=>'AuthorsController@getEdit'));
Route::put('author/update',array('before'=>'csrf','uses'=>'AuthorsController@putUpdate'));
Route::delete('author/delete',array('before'=>'csrf','uses'=>'AuthorsController@delete'));

//Route::Controller('awesome','AuthorsController@getAwesome');
Route::get('users/new',array('as'=>'user_new_route_name' , 'uses' =>'UsersController@getRegisterNew'));
Route::post('users/create',array('uses'=> 'UsersController@postCreate'));


Route::get('awesome','AuthorsController@getAwesome');
