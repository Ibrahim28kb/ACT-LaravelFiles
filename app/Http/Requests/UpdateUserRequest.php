<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
            'name'=>'required',
            'email'=>[

               
                Rule::unique('users', 'email')->ignore($this->route('user')),
                 // add rule to check if the new updated email already existed 
                //  with ignore the ther user email itself 
                     ],
            'avatar_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
            // check the uploaded file is image with allowed file extentions 

           
            
        ];
    }
}
