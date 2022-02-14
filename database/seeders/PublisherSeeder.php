<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publisher')->insert([
            ['name' => 'Bloomsbury Publishing'],
            ['name' => 'Canterbury Classics'],
            ['name' => 'Doubleday'],
            ['name' => 'Elex Media Komputindo'],
            ['name' => 'Gramedia Pustaka Utama'],
            ['name' => 'Kodansha'],
            ['name' => 'Regnery Publishing'],
            ['name' => 'Scribner'],
            ['name' => 'Viking Press'],
            ['name' => 'Wordsworth Editions Limited'],
        ]);
    }
}
