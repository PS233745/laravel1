<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_song')->insert([
            'song_id' => '6',
            'album_id' => '1'
        ]);
        DB::table('album_song')->insert([
            'song_id' => '7',
            'album_id' => '4'
        ]);
    }
}
