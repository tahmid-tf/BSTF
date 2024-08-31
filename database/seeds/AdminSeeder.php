<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table users');

        DB::table('users')->insert([
           'name' => 'Tahmid Ferdous',
            'email' => 'tahmid.tf1@gmail.com',
            'password' => Hash::make(123456789),
            'admin' => 'admin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
