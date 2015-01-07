<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColumnsToUsers extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			$table->string('name', 255)->after('id')->nullable();
			$table->string('last_name', 255)->after('name')->nullable();
			$table->string('image', 255)->after('last_name')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
			$table->dropColumn('name');
			$table->dropColumn('last_name');
			$table->dropColumn('image');
		});


	}

}
