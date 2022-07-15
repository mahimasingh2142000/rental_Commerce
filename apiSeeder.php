<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class apiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api')->insert([
            "name"=>"Mahima",
            "address"=>"lucknow"
        ]);
    }
}
