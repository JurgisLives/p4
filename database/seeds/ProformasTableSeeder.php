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
		$type_id = \App\Type::where('type','=','Neighborhood casual')->pluck('id');
		$fc_perc = \App\Type::where('id' , '=', '3')->pluck('fc_perc_t');
		$bc_perc = \App\Type::where('id' , '=', '3')->pluck('bc_perc_t');
		$lc_perc = \App\Type::where('id' , '=', '3')->pluck('lc_perc_t');
		$qfac_perc = \App\Type::where('id' , '=', '3')->pluck('qfac_perc_t');
		DB::table('proformas')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),			
			'proj_name' => "John Harvards",
			'food_sales' => 30000,
			'bev_sales' => 15000,
			'tl_sales'=> ('food_sales' + 'bev_sales'),
			//'fc_perc'=> $fc_perc,
			'fc_doll'=> ('food_sales') * ('fc_perc'),
			//'bc_perc'=> $bc_perc,
			'bc_doll'=>  ('bev_sales' * 'bc_perc'),
			//'lc_perc'=> $lc_perc,
			'lc_doll'=> ('tl_sales' * 'lc_perc'),
			//'qfac_perc'=> $qfac_perc,
			'qfac_doll'=> ('tl_sales' * 'qfac_perc'),
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
			//'type_id'=> $type_id,
		
		]);
	}
}
   