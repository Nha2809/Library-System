<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get some user and book IDs (make sure you have users and books seeded before running this)
        $user = User::first();
        $book = Book::first();

        if ($user && $book) {
            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'quantity' => 1,
                'status' => 'Applied',
            ]);

            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'quantity' => 2,
                'status' => 'Approved',
            ]);

            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'quantity' => 1,
                'status' => 'Returned',
            ]);
        } else {
            $this->command->info('No users or books found. Please seed users and books first.');
        }
    }
}
