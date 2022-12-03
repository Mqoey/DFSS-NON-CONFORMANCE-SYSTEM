<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            SuperAdminSeeder::class,
            RoleSeeder::class,
            // InspectorSeeder::class,
            // InspectorAdminSeeder::class,
            // CustomerSeeder::class,
        ]);
    }
}
