
<?php

use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			DB::table('users')->insert(array(
				"name"=>"Frank Tolstoy",
				"email"=>"frank@gmail.com",
				"password"=>"frank",
				"created_at"=>date(_RFC2822),
				"updated_at"=>date('y-m-d h:m:s')
			));
			DB::table('users')->insert(array(
				"name"=>"Louis Frank",
				"email"=>"louisfrank@gmail.com",
				"password"=>"louis",
				"created_at"=>date('y-m-d h:m:s'),
				"updated_at"=>date('y-m-d h:m:s')
			));
			DB::table('users')->insert(array(
				"name"=>"Anne Frank",
				"email"=>"annefrank@gmail.com",
				"password"=>"anne",
				"created_at"=>date('y-m-d h:m:s'),
				"updated_at"=>date('y-m-d h:m:s')
			));
			DB::table('users')->insert(array(
				"name"=>"William Shakespeare",
				"email"=>"william_shakespeare@gmail.com",
				"password"=>"william",
				"created_at"=>date('y-m-d h:m:s'),
				"updated_at"=>date('y-m-d h:m:s')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('email','=','frank@gmail.com')->delete();
		DB::table('users')->where('email','=','louisfrank@gmail.com')->delete();
		DB::table('users')->where('email','=','annefrank@gmail.com')->delete();
		DB::table('users')->where('email','=','william_shakespeare@gmail.com')->delete();
	}
	
}