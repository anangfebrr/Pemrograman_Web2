<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tambah data dummy
        Member::create([
            'name' => 'Anang Tampan',
            'email' => 'anangtampan@gmail.com',
            'gender' => 'Pria',
            'status' => 'Mahasiswa',
            'address' => 'Jl. doang, ga jadian'
        ]);
    }
}
