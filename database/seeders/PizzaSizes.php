<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSizes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insert([
            ['name' => 'Small','type' => 'A','price' => 10.99],
            ['name' => 'Medium','type' => 'B','price' => 11.99],
            ['name' => 'Large','type' => 'C','price' => 12.99],
                // Add more pizza data
            ]);
    }
}
