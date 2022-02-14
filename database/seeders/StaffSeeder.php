<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'user_id' => '3',
                'name' => 'Richard Wilson',
                'address' => 'Jl. Royal no. 1, Area 51',
                'phone' => '081234567890',
                'email' => 'richardwils@gmail.com',
                'birth' => '1993-09-12',
                'idNumber' => '3525xxxxxxxxxxxx',
            ],
            [
                'user_id' => '4',
                'name' => 'Margaret Donovan',
                'address' => 'Jl. Castle no. 1, Area 51',
                'phone' => '083838383838',
                'email' => 'margaret.d12@gmail.com',
                'birth' => '1991-06-16',
                'idNumber' => '3520xxxxxxxxxxxxx',
            ],
            [
                'user_id' => '5',
                'name' => 'Trafalgar Redd',
                'address' => 'Jl Crown no. 1, Area 51',
                'phone' => '081217171717',
                'email' => 'trafalredd00@gmail.com',
                'birth' => '1990-07-18',
                'idNumber' => '3525xxxxxxxxxxxx',
            ],
            [
                'user_id' => '6',
                'name' => 'Silver Knight',
                'address' => 'Winged Tree',
                'phone' => '08xxxxxxxx',
                'email' => 'hehva@gmail.com',
                'birth' => '2002-12-25',
                'idNumber' => '1412xxxxxxxxxxxx',
            ],
            [
                'user_id' => '7',
                'name' => 'Acerola-Orion',
                'address' => 'Winged Tree',
                'phone' => '08xxxxxxxx',
                'email' => 'kissshot@gmail.com',
                'birth' => '1407-09-20',
                'idNumber' => '4869xxxxxxxxxxxx',
            ],
        ]);
    }
}
