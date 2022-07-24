<?php

namespace Database\Seeders;

use App\Models\VirtualGuestBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\VirtualGuestBookFactory;

class VirtualGuestBookSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /***
         * Populate the virtual guest book database table
         */
        VirtualGuestBook::factory()->count(50)->create();
        
    }
}
