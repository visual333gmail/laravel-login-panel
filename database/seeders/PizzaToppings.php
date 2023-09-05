<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaToppings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('toppings')->insert([
            ['name' => 'Extra cheese','type' => 'A','price' => 10.99],
            ['name' => 'Jalapenos','type' => 'B','price' => 11.99],
            ['name' => 'Sweet Corns','type' => 'C','price' => 12.99],
            ['name' => 'Extra Veggie','type' => 'D','price' => 13.99],
                // Add more pizza data
            ]);
    }
}
