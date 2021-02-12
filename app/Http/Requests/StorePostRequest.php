<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePostRequest
 *
 * @package App\Http\Requests
 */
class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return isset(auth()->user()->id);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'], //  can be also an Rule object where we define a validiation rule
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A description is required',
        ];
    }
}
