<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('accesos', function($table)
	        {
	            $table->increments('id');
	            $table->integer('categoria_id')->unsigned();
	            $table->foreign('categoria_id')
	            			->references('id')->on('categorias')
						->onDelete('no action');
	            $table->integer('email_id')->unsigned();
	            $table->foreign('email_id')
	            			->references('id')->on('emails')
	            			->onDelete('no action');
	            $table->string('titulo', 255);
	            $table->string('url', 255);
	            $table->string('puerto', 4);
	            $table->string('usuario', 255);
	            $table->string('clave', 255);
	            $table->text('descripcion');
	            $table->softDeletes();
	            $table->timestamps();
	        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('accesos', function($table)
		// {
		//     $table->dropColumn('accesos');
		// });
	}

}
