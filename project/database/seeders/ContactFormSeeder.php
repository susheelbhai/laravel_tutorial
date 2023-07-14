<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Database\Factories\ContactFormFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $var4 = new ContactForm();
        // $var4->name = 'swati';
        // $var4->email = 'swati@gmail.com';
        // $var4->msg = Hash::make("999999999");
        // $var4->save();

        ContactForm::factory(10)->create();
    }
}
