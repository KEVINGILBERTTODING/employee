<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            \App\Models\Employee::create([
                'first_nm' => 'Jhon Doe ' . $i,
                'last_nm' => 'gilbert' . $i,
                'email' => 'jhondoe' . $i . '@gmail.com',
                'company_id' => 1,
                'phone' => '0090923232' . $i
            ]);
        }
    }
}
