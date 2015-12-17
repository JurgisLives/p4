<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectGradesAndProformas extends Migration
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
			$table->integer('grade_id')->unsigned();

			//this is the setup for the foreign key
			$table->integer('grade_id')->references('id')->on('grades');
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
			//adds a new int field called grades_id
			$table->dropForeign('proformas_grade_id_foreign');

			//this is the setup for the foreign key
			$table->dropColumn('grade_id');
		}	
    }
}
