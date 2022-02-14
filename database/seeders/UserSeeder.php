<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'APTX-4869',
                'email' => 'intankusuma4869@gmail.com',
                'password' => bcrypt('APTX-4869'),
                'role' => 'admin',
            ],
            [
                'name' => 'Yaniar Pradityas Effendi',
                'email' => 'yaniar0416@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Richard Wilson',
                'email' => 'richardwils@gmail.com',
                'password' => bcrypt('richard'),
                'role' => 'staff',
            ],
            [
                'name' => 'Margaret Donovan',
                'email' => 'margaret.d12@gmail.com',
                'password' => bcrypt('margaret'),
                'role' => 'staff',
            ],
            [
                'name' => 'Trafalgar Redd',
                'email' => 'trafalredd00@gmail.com',
                'password' => bcrypt('trafalgar'),
                'role' => 'staff',
            ],
            [
                'name' => 'Silver Knight',
                'email' => 'hehva@gmail.com',
                'password' => bcrypt('sekki'),
                'role' => 'staff',
            ],
            [
                'name' => 'Acerola-Orion',
                'email' => 'kissshot@gmail.com',
                'password' => bcrypt('shinobu'),
                'role' => 'staff',
            ],
            [
                'name' => 'Allan Hughes',
                'email' => 'allan.hughes@gmail.com',
                'password' => bcrypt('allan'),
                'role' => 'member',
            ],
            [
                'name' => 'Vanessa Silver',
                'email' => 'silvervang@gmail.com',
                'password' => bcrypt('vanessa'),
                'role' => 'member',
            ],
            [
                'name' => 'Salazar Slyther',
                'email' => 'ssslytherin@gmail.com',
                'password' => bcrypt('salazar'),
                'role' => 'member',
            ],
            [
                'name' => 'Fallen Angel',
                'email' => 'lucifer@gmail.com',
                'password' => bcrypt('lucifer'),
                'role' => 'member',
            ],
            [
                'name' => 'Aisin-Gioro',
                'email' => 'fulin@gmail.com',
                'password' => bcrypt('fulin'),
                'role' => 'member',
            ],
       ]);
    }
}
