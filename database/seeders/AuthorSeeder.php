<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author')->insert([
            ['name' => 'Agatha Christie'],
            ['name' => 'Akiyoshi Rikako'],
            ['name' => 'Akutagawa Ryuunosuke'],
            ['name' => 'Carl Sagan'],
            ['name' => 'Dan Brown'],
            ['name' => 'Dazai Osamu'],
            ['name' => 'Edgar Allan Poe'],
            ['name' => 'Edogawa Ranpo'],
            ['name' => 'Fyodor Dostoevsky'],
            ['name' => 'Haruki Murakami'],
            ['name' => 'Homer'],
            ['name' => 'Izumi Kyouka'],
            ['name' => 'J. K Rowling'],
            ['name' => 'Kunikida Doppo'],
            ['name' => 'Lexie Xu'],
            ['name' => 'Mori Ougai'],
            ['name' => 'Nakahara Chuuya'],
            ['name' => 'Nathaniel Hawthorne'],
            ['name' => 'Natsume Souseki'],
            ['name' => 'Oda Sakunosuke'],
            ['name' => 'Paulo Coelho'],
            ['name' => 'Sakaguchi Ango'],
            ['name' => 'Sir Arthur Conan Doyle'],
            ['name' => 'Stephen King'],
            ['name' => 'William Shakespeare'],
        ]);
    }
}
