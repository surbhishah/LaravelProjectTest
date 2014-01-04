<?php
// Gain some static methods by extending Eloquent
class User extends Eloquent{
/*
	This is needed only if we did not follow the naming conventions 
	the table name in Database should be plural "authors" while the model corresponding to the 
	table should be named singular "author"

*/
	protected $table = "users";
	protected $fillable = array('name', 'email', 'password');

}