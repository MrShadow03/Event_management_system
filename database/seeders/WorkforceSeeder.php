<?php

namespace Database\Seeders;

use App\Models\Workforce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkforceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workforce::factory()->count(100)->create();
    }
}
