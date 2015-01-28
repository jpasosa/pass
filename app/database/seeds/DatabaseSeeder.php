<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserSeeder');

        	$this->command->info('Tabla User cargada!');
		// $this->call('UserTableSeeder');
	}

}
