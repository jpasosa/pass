<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsAccesos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acceso_tag', function($table)
		{
			$table->integer('acceso_id')->unsigned();
			$table->foreign('acceso_id')
						->references('id')->on('accesos')
						->onDelete('cascade');
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')
						->references('id')->on('tags')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('acceso_tag', function($table)
		// {
		//     $table->dropColumn('acceso_tag');
		// });
	}

}
