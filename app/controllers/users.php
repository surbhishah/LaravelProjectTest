<?php

class UsersController extends Controller{
	public $restful = true;

	public function getRegisterNew(){
		$view = View::make('users.new');
		$view -> title = 'Register new user';
		return $view;
	}

	public function postCreate(){
		$newUser = new User();
		$newUser->name = Input::get('name');
		$newUser->email= Input::get('email');
		$newUser->password = Input::get('password');
		$newUser->save();
		return Redirect::route('authors_route_name')
					->with('message','You have been registered successfully, Thanks.'); 
	}

}
