<?php

namespace App\Observers;

use App\Models\VirtualGuestBook;
use Illuminate\Support\Facades\Cache;

class VirtualGuestBookObserver
{
    /**
     * Handle the VirtualGuestBook "created" event.
     *
     * @param  \App\Models\VirtualGuestBook  $virtualGuestBook
     * @return void
     */
    public function created(VirtualGuestBook $virtualGuestBook)
    {
        //Clear cache when new entry is created in guest book
        Cache::forget('guest_book_entries');
    }

    /**
     * Handle the VirtualGuestBook "updated" event.
     *
     * @param  \App\Models\VirtualGuestBook  $virtualGuestBook
     * @return void
     */
    public function updated(VirtualGuestBook $virtualGuestBook)
    {
        //Clear cache when entry is updated in guest book
        Cache::forget('guest_book_entries');
    }

    /**
     * Handle the VirtualGuestBook "deleted" event.
     *
     * @param  \App\Models\VirtualGuestBook  $virtualGuestBook
     * @return void
     */
    public function deleted(VirtualGuestBook $virtualGuestBook)
    {
        //Clear cache when entry is deleted in guest book
        Cache::forget('guest_book_entries');
    }

    /**
     * Handle the VirtualGuestBook "restored" event.
     *
     * @param  \App\Models\VirtualGuestBook  $virtualGuestBook
     * @return void
     */
    public function restored(VirtualGuestBook $virtualGuestBook)
    {
        //
    }

    /**
     * Handle the VirtualGuestBook "force deleted" event.
     *
     * @param  \App\Models\VirtualGuestBook  $virtualGuestBook
     * @return void
     */
    public function forceDeleted(VirtualGuestBook $virtualGuestBook)
    {
        //
    }
}
