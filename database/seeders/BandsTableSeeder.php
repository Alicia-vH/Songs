<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bands')->insert([
            'name' => 'Testers',
            'genre' => 'Smth',
            'founded' => '1999',
            'created_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'jkbk',
            'genre' => 'Smtbjkbjkbjkh',
            'founded' => '2000',
            'created_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Tes nbjkbjijters',
            'genre' => 'Smjnkjbhjkbjlth',
            'founded' => '1758',
            'created_at' => now(),
        ]);
    }
}
