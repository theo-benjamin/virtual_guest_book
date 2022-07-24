<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class VirtualGuestBookObserver
{
    //Delete cache once a virtual guest book has been update ,deleted or created


    public function created(){
       
        // Clear Cache once a new entry has been created 
        Cache::forget('guest_book_entries');

    }

    public function updated(){

        // Clear Cache once an entry has been updated 
        Cache::forget('guest_book_entries');

    }

    public function deleted(){

        // Clear Cache once an entry has been deleted
        Cache::forget('guest_book_entries');

    }

}
