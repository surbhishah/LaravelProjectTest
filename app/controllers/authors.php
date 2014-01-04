<?php
//use Controllers/Base_Controller;
class AuthorsController extends BaseController{

	public $restful = true;//To make the service restful
	//function starts with get because it will correspond to http GET request
	public function getIndex(){
		// return the view 
		// All the views are present under the views folder
		// Under the views folder , we have our view in authors folder and is index
		// Do not put the extension of the file
		// Extension may be anything .jsp or .php or .html does not matter 
		// This information generally comes from the model
		return View::make('authors.index')
					->with('title','Authors and books')
					->with('authors',Author::orderBy('name','desc')->get());
		
	}
	
	public function getAuthor($id){
		return View::make('authors.info')
					->with('title','Author information')
					->with('author',Author::find($id));
	}

	public function getRegisterNew(){
		return View::make('authors.new')
					->with('title','Add New Author')
					->nest('errorview','common.author_errors');
	}

	public function getAwesome(){
		$view = View::make('authors.awesome');
		$view->name = "Surbhi Shah";
		return $view;
	}

	public function postCreate(){
		$validation = Author::validate(Input::all());
		if($validation->fails() ){
			return Redirect::route('author_new_route_name')->withErrors($validation)->withInput();
			//with_input = remembers old data
		}
		else{
			$newAuthor = new Author;
			$newAuthor->name = Input::get('name');
			$newAuthor->bio = Input::get('bio');
			$newAuthor->save();
			return Redirect::route('authors_route_name')
						->with('message','Author added successfully!');
			}

		/*
		Alternative:
		Author::create(	array(
					'name'=>Input::get('name'),
					'bio'=>input::get('bio') 
				));
		*/
	}

	public function getEdit($id){
		return View::make('authors.edit')
					->with('title','Edit Author')
					->with('author',Author::find($id))
					->nest('errorview','common.author_errors');

	}

	public function putUpdate(){
		$id= Input::get('id');
		$validation= Author::validate(Input::all());
		if($validation -> fails()){
			return Redirect::route('author_edit_name',$id)->withErrors($validation)->withInput();
						
		}else{
			$author=Author::find($id);
			$author->name = Input::get('name');
			$author->bio = Input::get('bio');
			$author->save();
			return Redirect::route('author_route_name',$id)
					 ->with('message','Author updated successfully!');
		}
	}

	public function delete(){
		$id = Input::get('id');
		$author=Author::find($id);
		$author->delete();
		return Redirect::route('authors_route_name')
					->with('message','Author deleted successfully!');

	}






}