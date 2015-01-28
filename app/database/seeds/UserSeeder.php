<?php

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->truncate();


		DB::table('users')->insert(array(array(
												'name' 			=> 'Juan Pablo',
	    											'last_name' 		=> 'Sosa',
	    											'username' 		=> 'juampa',
	    											'email' 			=> 'juanpablososa@gmail.com',
	    											'password' 		=> '$2y$10$hIN3G808pka8n6R0Ig6cNOlRr2wrM6h61/jNSvUsMECB7HmRxR2/m',
	    											'remember_token' 	=> 'yRWvJoXZTSw7emBp94q1iZjzPy1Q00hXvZgGNqVDMGGn22vzTlFDPBv8UUfp',
	    											'confirmation_code' => 'b98a7dfe6afba4b0288418088c2b18ee',
	    											'confirmed' 		=> 1
												),
										array(
												'name' 			=> 'Juasdasan Pablo',
	    											'last_name' 		=> 'Soasdsa',
	    											'username' 		=> 'juamasdpa',
	    											'email' 			=> 'pepe@gmail.com',
	    											'password' 		=> '$2y$10$hIN3G808pka8nasd0Ig6cNOlRr2wrM6h61/jNSvUsMECB7HmRxR2/m',
	    											'remember_token' 	=> 'yRWvJoXZTSw7emBp94q1iZjzPy1Q00hXvZgGNqVDMGGn22vzTlFDPBv8UUfp',
	    											'confirmation_code' => 'b98a7dfe6afba4b0288418088c2b18ee',
	    											'confirmed' 		=> 1
										)));

	}

}
