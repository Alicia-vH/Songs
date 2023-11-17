<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('albums')->insert([
            'name' => 'Yahoo',
            'year' => '3000',
            'times_sold' => '50',
            'created_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'A band',
            'year' => '1200',
            'times_sold' => '14',
            'created_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Wow',
            'year' => '1589',
            'times_sold' => '1',
            'created_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Yo',
            'year' => '1400',
            'times_sold' => '10000',
            'created_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'OMG',
            'year' => '8000',
            'times_sold' => '90',
            'created_at' => now(),
        ]);
    }
}
