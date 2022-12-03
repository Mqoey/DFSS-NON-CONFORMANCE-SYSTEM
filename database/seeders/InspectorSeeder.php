<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InspectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'inspector',
            'email' => 'inspector@mail.com',
            'password' => Hash::make('inspector'),
            'role' => 'inspector',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
