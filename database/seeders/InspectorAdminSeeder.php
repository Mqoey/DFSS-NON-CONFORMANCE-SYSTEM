<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InspectorAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'inspectoradmin',
            'email' => 'inspectoradmin@mail.com',
            'password' => Hash::make('inspectoradmin'),
            'role' => 'inspectoradmin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
