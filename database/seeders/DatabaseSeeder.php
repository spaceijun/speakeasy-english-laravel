<?php

namespace Database\Seeders;

use App\Models\DetailHafalan;
use App\Models\Hafalan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Hafalan::factory(10)->create();
        DetailHafalan::factory(10)->create();
    }
}
