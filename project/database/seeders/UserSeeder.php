<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var = new User();
        $var->name = 'susheel';
        $var->email = 'sksingh@gmail.com';
        $var->password = Hash::make("999999999");
        $var->save();
        
        $var2 = new User();
        $var2->name = 'Mohit';
        $var2->email = 'mohit@gmail.com';
        $var2->password = Hash::make("999999999");
        $var2->save();

        $var3 = new User();
        $var3->name = 'swati';
        $var3->email = 'swati@gmail.com';
        $var3->password = Hash::make("999999999");
        $var3->save();
    }
}
