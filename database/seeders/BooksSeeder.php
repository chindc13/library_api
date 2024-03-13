<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'id'          => 1,
            'title'       => "Big Bang Theory",
            'library_id'  => 1,
            'created_at'  => '2024-03-13 06:51:43',
            'updated_at'  => '2024-03-13 06:51:43',
        ]);

        DB::table('books')->insert([
            'id'          => 2,
            'title'       => "Young Sheldon",
            'library_id'  => 2,
            'created_at'  => '2024-03-13 06:51:43',
            'updated_at'  => '2024-03-13 06:51:43',
        ]);

        DB::table('books')->insert([
            'id'          => 3,
            'title'       => "How i met your mother",
            'library_id'  => 1,
            'created_at'  => '2024-03-13 06:51:43',
            'updated_at'  => '2024-03-13 06:51:43',
        ]);

        DB::table('books')->insert([
            'id'          => 4,
            'title'       => "Two and a Half Men",
            'library_id'  => 2,
            'created_at'  => '2024-03-13 06:51:43',
            'updated_at'  => '2024-03-13 06:51:43',
        ]);
    }
}
