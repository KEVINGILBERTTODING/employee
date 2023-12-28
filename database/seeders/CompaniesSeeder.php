<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            \App\Models\Companies::create([
                'name' => 'Jhon Doe ' . $i,
                'address' => 'Jl. Pahlawan',
                'email' => 'jhondoe@gmail.com'
            ]);
        }
    }
}
