<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
	//for($i = 0, i < 100, i++){}
    DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Quick Service',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Institutional',
        'fc_perc_t' => .23,
        'bc_perc_t' => .11,
        'qfac_perc_t' => .017,
        'lc_perc_t' => .07,
    ]);
	
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Neighborhood Casual',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Neighborhood Semi-casual',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Neighborhood Fine Dining',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'High Volume Casual',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'High Volume Semi-casual',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Destination casual',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Destination Fine Dining',
        'fc_perc_t' => .27,
        'bc_perc_t' => .12,
        'qfac_perc_t' => .01,
        'lc_perc_t' => .11,
    ]);
	
	
	
}
}

