<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Author 1'],
            ['name' => 'Author 2'],
            ['name' => 'Author 3'],
            ['name' => 'Author 4'],
            ['name' => 'Author 5'],
        ]);
    }
}
