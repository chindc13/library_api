<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            'id'          => 1,
            'name'        => "Library Name 1",
        ]);

        DB::table('libraries')->insert([
            'id'          => 2,
            'name'        => "Library Name 2",
        ]);
    }
}
