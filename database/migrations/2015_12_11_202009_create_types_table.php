<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     */
 public function up() {
//schema class helps with stuff.
    Schema::create('types', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('type');
        $table->float('fc_perc_t');		
        $table->float('bc_perc_t');		
        $table->float('qfac_perc_t');
		$table->float('lc_perc_t');
        $table->boolean('beer');
        $table->boolean('booze');

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('types');
    }
}
