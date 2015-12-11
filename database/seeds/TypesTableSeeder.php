<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
	    $table->string('type');
        $table->float('fc_adj');
        $table->float('lc_adjust');
        $table->string('info_link');

     */
public function run()
{
	//for($i = 0, i < 100, i++){}
    DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Chinese',
        'fc_adj' => -.12,
        'lc_adj' => 0,
        'info_link' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
    ]);
	
    DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Mexican',
        'fc_adj' => -.18,
        'lc_adj' => .1,
        'info_link' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
    ]);

    DB::table('types')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'type' => 'Burger Stand',
        'fc_adj' => .15,
        'lc_adj' => -.5,
        'info_link' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
    ]);

}
}