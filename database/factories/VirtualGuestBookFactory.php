<?php

namespace Database\Factories;

use App\Models\VirtualGuestBook;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VirtualGuestBook>
 */
class VirtualGuestBookFactory extends Factory
{

    /**
     * 
     * Define the factory's corresponding model 
     */
    protected $model=VirtualGuestBook::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition()
    {
        return [
            //
            'name'=>fake()->name(),
            'message'=>Str::random(100)
        ];
    }
}
