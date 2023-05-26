<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        $bookid = Book::pluck("id"); // Ngambil ID doang dari table books
        $CountId = count($bookid);
        for ($i=0; $i < $CountId; $i++) {
            Detail::create([
                "book_id" => $bookid[$i], // Kasusnya kalau id dari buku itu bukan 1 , 2 , 3. tapi kyk B001, B002. Jadi kita bisa langsung tembak ke idnya.
                // jadi dengan gini kita otomatis cuman ambil id yang ada dari table books aja.

                "author" => $faker->name(),
                "publisher" => $faker->company(),
                "year" => $faker->year(),
                "description" => $faker->paragraph()
            ]);
        }
    }
}
