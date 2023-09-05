<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('pizzas')->insert([
        ['name' => 'Farmhouse','type' => 'A','price' => 100.99],
        ['name' => 'Margarita','type' => 'B','price' => 110.99],
        ['name' => 'Peppy Paneer','type' => 'C','price' => 120.99],
            // Add more pizza data
        ]);
       
    }
}
