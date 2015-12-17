<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectTypesAndProformas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('proformas', function (Blueprint $table)
		{
			//adds a new int field called grades_id
			$table->integer('type_id')->unsigned();

			//this is the setup for the foreign key
			$table->integer('type_id')->references('id')->on('types');
		}	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proformas', function (Blueprint $table)
		{
			//adds a new int field called types_id
			$table->dropForeign('proformas_type_id_foreign');

			//this is the setup for the foreign key
			$table->dropColumn('type_id');
		}	
    }
}
