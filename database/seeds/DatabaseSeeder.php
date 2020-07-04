<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('admin@123'),
            'userimage' => 'default.jpg',
            'phoneno' => '1234567890',
            'about' => null,
            'roles' => 'A',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
