<?php

use Illuminate\Database\Seeder;

class ProformasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
	public function run()
	{
		//for($i = 0, i < 100, i++){}
		DB::table('proformas')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'proj_name' => "John Harvards",
			'food_sales' => 30000,
			'bev_sales' => 15000,
			'tl_sales'=> ('food_sales' + 'bev_sales'),
			'fc_perc'=> .295,
			'fc_doll'=> ('food_sales') * ('fc_perc'),
			'bc_perc' => .125,
			'bc_doll'=>  ('food_sales') * 'fc_perc',
			'lc_perc' => .12,
			'lc_doll'=> ('tl_sales' * 'lc_perc'),
			'qfac_perc' => .03,
			'lc_doll'=> ('tl_sales' * 'qfac_perc'),
			'tot_vcost' => ('fc_doll' + 'bc_doll' + 'lc_doll'),
			'tot_vcost_perc'=>('tot_vcost' / 1),
			'rent'=> 0,
			'other_fx_cost' => 0,
			'g_a' => ('tl_sales' * .02),
			'tot_fx_cost' => ('rent' + 'other_fx_cost' + 'g_a'),
			'pretax_prof'=> ('tl_sales' - ('tot_vcost' + 'tot_fx_cost')),
			'tax_rate'=> .33,
			'tot_prof' => ('pretax_prof' - ('pretax_prof' * 'tax_rate')),
			'bep_doll' => ('tot_fx_cost' / (1)),
			'avg_check' => 35,
			'bep_cov'=> ('bep_doll' / 1),
		
		]);
	}
}
