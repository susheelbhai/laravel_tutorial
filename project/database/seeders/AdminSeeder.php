<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = 'Susheel';
        $admin->email = 'susheelkrsingh306@gmail.com';
        $admin->password = '$2y$10$P4AxS47wiBUbl1tJwdR.lOE0pFMwNrd0PRA919FFz1kVoTgoQfaau'; // bbbbbbbb
        $admin->save();
    }
}
