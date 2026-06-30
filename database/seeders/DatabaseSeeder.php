<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed tables in correct order (respecting foreign key dependencies)

        // 1. Categories first (no dependencies)
        $this->call([
            CategorySeeder::class,
        ]);

        // 2. Main tables (depend on category)
        $this->call([
            HafalanSeeder::class,
            GrammarSeeder::class,
            TensesSeeder::class,
            FrasaSeeder::class,
            IdiomSeeder::class,
            KosakataSeeder::class,
        ]);

        // 3. Detail tables (depend on main tables)
        $this->call([
            DetailHafalanSeeder::class,
            DetailGrammarSeeder::class,
            DetailTensesSeeder::class,
            DetailFrasaSeeder::class,
            DetailIdiomSeeder::class,
        ]);

        // 4. Materi tables (depend on detail tables)
        $this->call([
            MateriGrammarSeeder::class,
            MateriKosakataSeeder::class,
            MateriTensesSeeder::class,
        ]);

        // 5. Tugas tables (depend on main tables)
        $this->call([
            TugasHafalanSeeder::class,
            TugasGrammarSeeder::class,
            TugasTensesSeeder::class,
            TugasKosakataSeeder::class,
            TugasFrasaSeeder::class,
            TugasIdiomSeeder::class,
        ]);
    }
}
