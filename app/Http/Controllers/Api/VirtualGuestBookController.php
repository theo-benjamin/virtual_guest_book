<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\VirtualGuestBookRequest;
use App\Http\Resources\VirtualGuestBookResource;
use App\Models\VirtualGuestBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VirtualGuestBookController extends Controller
{
    //
    public function retrieve()
    {
  
        // Retrieve all guest book entries
        return VirtualGuestBookResource::collection(Cache::remember('guest_book_entries',60,function(){
            return VirtualGuestBook::all();
        }));
    }

    public function retrieve_by_id($id)
    {


        // Retrieve a singular entry based on id

        return VirtualGuestBookResource::collection(array(VirtualGuestBook::findorFail($id)));
    }


    //
    public function create(VirtualGuestBookRequest $request)
    {

        $virtual_guest_book=VirtualGuestBook::create([
            'name' => $request->name,
            'message' => $request->message
        ]);

        return VirtualGuestBookResource::collection(array($virtual_guest_book));
    }


    //edit entry
    public function edit(VirtualGuestBookRequest $request, $id)
    {

        // Find entry by id and update that entry
        $status = VirtualGuestBook::findorFail($id)->update(array(
            'name' => $request->name,
            'message' => $request->message
        ));

        // Send Updated Entry as Response
        return VirtualGuestBookResource::collection(array(VirtualGuestBook::find($id)));
    }

    public function delete($id)
    {
        // Find entry by ID and delete
        $status = VirtualGuestBook::findorFail($id)->delete();
        // return response  true if the entry was deleted and return 404 if it failed
        return response()->json(array('data' => array('status', $status)), 200);
    }
}
