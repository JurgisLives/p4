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

        // $this->call(UserTableSeeder::class);
		$this->call(TypesTableSeeder::class);
		$this->call(GradesTableSeeder::class);
		//for ($i = 0, $i < 50, $i++){}
		$this->call(ProformasTableSeeder::class);
		

        Model::reguard();
    }
}
