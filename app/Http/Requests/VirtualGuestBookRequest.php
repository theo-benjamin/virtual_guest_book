<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VirtualGuestBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // A field in ther virtual guest book are required
        return [
            'name'=>'required',
            'message'=>'required'
        ];
    }

    
}
