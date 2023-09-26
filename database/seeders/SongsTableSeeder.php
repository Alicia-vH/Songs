<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            'title' => 'Come Take My Hand',
            'singer' => '2 Brothers on The 4th Floor',
            'created_at' => now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Snap Out Of It',
            'singer' => 'Artic Monkeys',
            'created_at' => now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'My Way',
            'singer' => 'Elvis Presley',
            'created_at' => now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Guilty Conscience',
            'singer' => 'Eminem, Dr. Dre',
            'created_at' => now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Tattoo',
            'singer' => 'Loreen',
            'created_at' => now(),
        ]);
    }
}
