<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tambah data dummy
        Book::create([
            'title' => '10 Dosa Besar Pak Toto',
            'isbn' => 238578,
            'stok' => 50
        ]);
    }
}
