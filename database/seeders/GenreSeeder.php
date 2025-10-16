<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => 'Novel'],
            ['name' => 'Komik'],
            ['name' => 'Pelajaran'],
            ['name' => 'Biografi'],
            ['name' => 'Teknologi'],
        ]);
    }
}
