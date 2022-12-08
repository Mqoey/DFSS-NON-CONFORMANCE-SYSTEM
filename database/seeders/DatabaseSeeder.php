<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Inspector;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use App\Models\User;
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
            //            InspectorSeeder::class,
            //            InspectorAdminSeeder::class,
            //            CustomerSeeder::class,
            //            Customer::factory(205)->create().,
            //            User::factory(12)->create(),
            //            Inspector::factory(346)->create(),
            //            InspectorAdmin::factory(211)->create(),
            //            NonConformativeForm::factory(439)->create(),
        ]);
    }
}
