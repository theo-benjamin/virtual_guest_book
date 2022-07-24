<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\VirtualGuestBook;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Run the Virtual Guest Book Seeder with sail artisan db:seed

        $this->call([
            VirtualGuestBookSeeder::class,
            // Add Next Seeder Here
        ]);
       
    }
}
