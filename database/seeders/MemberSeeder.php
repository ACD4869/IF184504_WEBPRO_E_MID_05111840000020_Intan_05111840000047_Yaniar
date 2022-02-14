<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
            [
                'user_id' => '8',
                'name' => 'Allan Hughes',
                'address' => 'Jl Orange no. 1, Area 51',
                'phone' => '085257575757',
                'email' => 'allan.hughes@gmail.com',
                'birth' => '1992-08-13',
                'idNumber' => '3520xxxxxxxxxxxx',
            ],
            [
                'user_id' => '9',
                'name' => 'Vanessa Silver',
                'address' => 'Jl Melon no. 1, Area 51',
                'phone' => '089494949494',
                'email' => 'silvervang@gmail.com',
                'birth' => '1993-01-02',
                'idNumber' => '3510xxxxxxxxxxxx',
            ],
            [
                'user_id' => '10',
                'name' => 'Salazar Slyther',
                'address' => 'Jl Grape no. 1, Area 51',
                'phone' => '082282828282',
                'email' => 'ssslytherin@gmail.com',
                'birth' => '1992-11-22',
                'idNumber' => '3535xxxxxxxxxxxx',
            ],
            [
                'user_id' => '11',
                'name' => 'Fallen Angel',
                'address' => 'Hell',
                'phone' => '08xxxxxxxxxx',
                'email' => 'lucifer@gmail.com',
                'birth' => '1995-01-25',
                'idNumber' => '4616xxxxxxxxxxxx',
            ],
            [
                'user_id' => '12',
                'name' => 'Aisin-Gioro',
                'address' => 'Qing',
                'phone' => '08xxxxxxxxxx',
                'email' => 'fulin@gmail.com',
                'birth' => '1638-03-15',
                'idNumber' => '1661xxxxxxxxxxxx',
            ],
        ]);
    }
}
