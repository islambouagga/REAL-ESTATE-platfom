<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'usertable_id' => 1,
            'usertable_type' => 'Admin',
        ]);
    }
}
