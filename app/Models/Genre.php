<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Informatika'],
            ['id' => 2, 'name' => 'Fiksi'],
            ['id' => 3, 'name' => 'Mesin'],
            ['id' => 4, 'name' => 'Novel'],
            ['id' => 5, 'name' => 'Sejarah'],
        ];
    }
}
