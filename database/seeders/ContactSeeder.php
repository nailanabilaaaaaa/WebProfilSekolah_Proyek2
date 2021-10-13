<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'phone' => '0341-000-435',
            'email' => 'sdn1bareng@gmail.com',
            'location' => 'Jl. Kelud No.10 A, Kauman, Kec. Klojen,Kota Malang, Jawa Timur 65116',
        ]);
        
    }
}
