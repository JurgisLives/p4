<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up() {
//schema class helps with stuff.
    Schema::create('proformas', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('proj_name');
        $table->float('food_sales');
        $table->float('bev_sales');
        $table->float('tl_sales');
		$table->float('fc_doll');
		$table->float('bc_doll');
		$table->float('lc_doll');
		$table->float('qfac_doll');	
		$table->float('tot_vcost_perc');		
        $table->float('tot_vcost');
        $table->integer('rent');
        $table->float('other_fx_cost');
        $table->float('g_a');
        $table->float('tot_fx_cost');
        $table->float('pretax_prof');
        $table->float('tax_rate');
		$table->float('tot_prof');
        $table->float('bep_doll');
		$table->integer('avg_check');
        $table->string('bep_cov');
    });
			
		Schema::table('proformas', function($table) {
			
			$table->integer('type_id')->unsigned()->nullable();
			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
			
			$table->float('fc_perc')->unsigned()->nullable();
			$table->foreign('fc_perc')->references('fc_perc_t')->on('types');
			
			$table->float('bc_perc')->unsigned()->nullable();
			$table->foreign('bc_perc')->references('bc_perc_t')->on('types');
			
			$table->float('lc_perc')->unsigned()->nullable();
			$table->foreign('lc_perc')->references('lc_perc_t')->on('types');
			
			$table->float('qfac_perc')->unsigned()->nullable();
			$table->foreign('qfac_perc')->references('qfac_perc_t')->on('types');

		});

}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proformas');
    }
}

