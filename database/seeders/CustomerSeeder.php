<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'customer@mail.com',
            'password' => Hash::make('customer'),
            'role' => 'customer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
