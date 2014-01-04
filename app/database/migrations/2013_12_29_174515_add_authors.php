<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
				"name"=>"Surbhi Shah",
				"bio"=>"Surbhi is a talented writer, She is from Indore",
				"created_at"=>date('y-m-d h:m:s'),
				"updated_at"=>date('y-m-d h:m:s')
			));
		DB::table('authors')->insert(array(
				"name"=>"Dhruv Shah",
				"bio"=>"Dhruv is a talented writer, he is from Indore",
				"created_at"=>date('y-m-d h:m:s'),
				"updated_at"=>date('y-m-d h:m:s')
			));
		DB::table('authors')->insert(array(
				"name"=>"Chandni Shah",
				"bio"=>"Chandni wrote 3 books",
				"created_at"=>date('2013-7-8 11:23:33'),
				"updated_at"=>date('2013-7-8 11:23:33')
			));
		DB::table('authors')->insert(array(
				"name"=>"Hetal Jain",
				"bio"=>"Hetal is a distinguished writer of 3 best sellers",
				"created_at"=>date('2013-7-9 11:23:33'),
				"updated_at"=>date('2013-7-9 11:23:33')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Surbhi Shah')->delete();
		DB::table('authors')->where('name','=','Dhruv Shah')->delete();
		DB::table('authors')->where('name','=','Chandni Shah')->delete();
		DB::table('authors')->where('name','=','Hetal Jain')->delete();
	}
}




