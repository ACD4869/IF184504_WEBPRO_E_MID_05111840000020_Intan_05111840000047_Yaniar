<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
		'user_id' => '1',
                'name' => 'APTX-4869',
                'email' => 'intankusuma4869@gmail.com',
                'address' => 'Ponorogo',
                'phone' => '081217190628',
                'birth' => '2000-01-28',
                'idNumber' => '3502xxxxxxxxxxxx',
         ]);    
        DB::table('admins')->insert([
		'user_id' => '2',
                'name' => 'Yaniar Pradityas Effendi',
                'email' => 'yaniar0416@gmail.com',
                'address' => 'Gresik',
                'phone' => '081217573735',
                'birth' => '2000-01-19',
                'idNumber' => '3525xxxxxxxxxxxx',
        ]);
    }
}
