<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$this->call(TypesTableSeeder::class);
		$this->call(ProformasTableSeeder::class);
		

        Model::reguard();
    }
}
