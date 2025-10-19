<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['jaka_id' => 1, 'title' => 'Book 1', 'description' => 'Description 1'],
            ['aisah_id' => 2, 'title' => 'Book 2', 'description' => 'Description 2'],
            ['oing_id' => 3, 'title' => 'Book 3', 'description' => 'Description 3'],
            ['aan_id' => 4, 'title' => 'Book 4', 'description' => 'Description 4'],
            ['joko_id' => 5, 'title' => 'Book 5', 'description' => 'Description 5'],
        ]);
    }
}
