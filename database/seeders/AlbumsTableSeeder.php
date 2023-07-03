<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Led Zeppelin',
            'year' => '1969',
            'times_sold' => 10500000,
            'band_id' => '1'
        ]);
        DB::table('albums')->insert([
            'name' => "Sgt Pepper's Lonely Hearts Club Band",
            'year' => '1967',
            'times_sold' => 32000000,
            'band_id' => '2'
        ]);
        DB::table('albums')->insert([
            'name' => 'Highway to Hell',
            'year' => '1979',
            'times_sold' => 9396928,
            'band_id' => '3'
        ]);
        DB::table('albums')->insert([
            'name' => "Abbey Road",
            'year' => '1969',
            'times_sold' => 19000000,
            'band_id' => '2'
        ]);
        DB::table('albums')->insert([
            'name' => 'Back in Black',
            'year' => '1980',
            'times_sold' => 50000000,
            'band_id' => '3'
        ]);
    }
}
