<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VirtualGuestBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         // Don't show ID 
         return [
            'name'=>$this->name,
            'message'=>$this->message,
        ];
    }
}
