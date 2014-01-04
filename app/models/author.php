<?php
// Gain some static methods by extending Eloquent
class Author extends Eloquent{
/*
	This is needed only if we did not follow the naming conventions 
	the table name in Database should be plural "authors" while the model corresponding to the 
	table should be named singular "author"

*/
	protected $table = "authors";
	protected $fillable = array('name', 'bio');
	

	public static $rules = array(
			'name'=>'required|min:2',
			'bio'=>'required|min:10'

		);
	public static function validate($data){
		return Validator::make($data,static::$rules);
	}
}