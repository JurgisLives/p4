<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
	public function run()
	{
		//for($i = 0, i < 100, i++){}
		DB::table('grades')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grade' => 1,
			'fc_adj' => -3,
			'lc_adj' => -3,
			'qfac_adj'=> -1.5,
			'opcost_adj'=> -7,
		]);
		
		DB::table('grades')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grade' => 2,
			'fc_adj' => -2,
			'lc_adj' => -1,
			'qfac_adj'=> -.5,
			'opcost_adj'=> 0,
		]);
		
		DB::table('grades')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grade' => 3,
			'fc_adj' => .5,
			'lc_adj' => 1,
			'qfac_adj'=> 1,
			'opcost_adj'=> 5,
		]);
		
				DB::table('grades')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grade' => 4,
			'fc_adj' => 2,
			'lc_adj' => 2,
			'qfac_adj'=> 1.5,
			'opcost_adj'=> 10,
		]);
		
				DB::table('grades')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grade' => 5,
			'fc_adj' => 4,
			'lc_adj' => 5,
			'qfac_adj'=> 2,
			'opcost_adj'=> 15,
		]);
	}
}

