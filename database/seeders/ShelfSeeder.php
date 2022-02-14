<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ShelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelf')->insert([
            ['name' => 'A001'],
            ['name' => 'A002'],
            ['name' => 'A003'],
            ['name' => 'A004'],
            ['name' => 'A005'],
            ['name' => 'B001'],
            ['name' => 'B002'],
            ['name' => 'B003'],
            ['name' => 'B004'],
            ['name' => 'B005'],
            ['name' => 'C001'],
            ['name' => 'C002'],
            ['name' => 'C003'],
            ['name' => 'C004'],
            ['name' => 'C005'],
            ['name' => 'D001'],
            ['name' => 'D002'],
            ['name' => 'D003'],
            ['name' => 'D004'],
            ['name' => 'D005'],
        ]);
    }
}
