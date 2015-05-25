<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class TerceroTablaSeeder extends Seeder {


			// 'cedula'	=> $faker->businessIdentificationNumber,
			// 'nombre' 	=> $faker->name,
			// 'rol'       => 'Cliente',
			// 'direccion' => $faker->address,
			// 'telefono'  => $faker->unique()->cellphone(false),
			// 'email' 	=> $faker->unique()->freeEmail, 
			// 'nota' 		=> $faker->paragraph(rand(1,2))

	
	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 500; $i ++) 
		{		

		\DB::table('terceros')->insert(array(

			// 'cedula'	=> 498838224,                 
			// 'nombre' 	=> 'Seder',                 
			// 'rol'       => 'Cliente',
			// 'direccion' => 'Desde Seeders',                
			// 'telefono'  => '23421233',                 
			// 'email' 	=> 'seeer@seeder.com',                 
			// 'nota' 		=> 'No pude hacerlo con Faker',    


			'nombre' 	=> $faker->name,
			'cedula'	=> $i.'234672'.$i,
			
			'rol'       => 'Cliente',
			'direccion' => $faker->address,
			'telefono'  => '8632'.$i."523".$i,
			'email' 	=> $faker->unique()->freeEmail, 
			'nota' 		=> $faker->paragraph(rand(1,2))



		));
		
		}

	}

}
