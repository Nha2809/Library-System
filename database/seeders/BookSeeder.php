<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'book_img' => 'great_gatsby.jpg',
            'auther_name' => 'F. Scott Fitzgerald',
            'auther_img' => 'fitzgerald.jpg',
            'quantity' => 5,
        ]);

        Book::create([
            'title' => '1984',
            'book_img' => '1984.jpg',
            'auther_name' => 'George Orwell',
            'auther_img' => 'orwell.jpg',
            'quantity' => 3,
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'book_img' => 'mockingbird.jpg',
            'auther_name' => 'Harper Lee',
            'auther_img' => 'lee.jpg',
            'quantity' => 7,
        ]);
    }
}
