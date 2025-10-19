<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'jaka 1'],
            ['name' => 'aisah 2'],
            ['name' => 'oing 3'],
            ['name' => 'aan 4'],
            ['name' => 'joko 5'],
        ]);
    }
}
