<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualGuestBook extends Model
{
    use HasFactory;

    /**
     * Define the model's corresponding table
     */
    protected $table='virtual_guest_book'; 

    /**
     * Mass Assign name and message column
     */
    protected $fillable=['name','message'];


}
