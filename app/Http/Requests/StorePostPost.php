<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        // este debe estar en verdader o true el ingles
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        // definimos todas la validaciones.
        
        return [
        'title' => 'required|min:5|max:500',
        'url_clean' => 'required|min:5|max:500',
        'content' => 'required|min:5',
        'posted' => 'required',
        'category_id' => 'required',

        //  'category_id' =>''


        ];
    }
}
