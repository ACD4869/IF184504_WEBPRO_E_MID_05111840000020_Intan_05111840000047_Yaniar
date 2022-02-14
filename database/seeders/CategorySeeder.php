<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['name' => 'Action and adventure'],
            ['name' => 'Biography'],
            ['name' => 'Comic'],
            ['name' => 'Crime'],
            ['name' => 'Drama'],
            ['name' => 'Epic poetry'],
            ['name' => 'Fairytale'],
            ['name' => 'Fantasy'],
            ['name' => 'History'],
            ['name' => 'History fiction'],
            ['name' => 'Horror'],
            ['name' => 'Mystery'],
            ['name' => 'Philosophical fiction'],
            ['name' => 'Romance'],
            ['name' => 'Science'],
            ['name' => 'Science fiction'],
            ['name' => 'Suspense'],
            ['name' => 'Thriller'],
            ['name' => 'Young adult'],
        ]);
    }
}
