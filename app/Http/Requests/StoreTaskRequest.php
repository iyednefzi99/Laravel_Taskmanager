<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // authorized
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 
            'title' =>'required|string|max:255', // required
            'description' =>'nullable|string|max:255', 
            'priority' => 'required|integer|between:1,3',

        ];
    }
    public function messages(){
        return [

            'description.required' => 'Task description is required',
            'description.string' => 'Task description must be a string',
            'description.max' => 'Task description is too long',
            'priority.required' => 'Task priority is required',
            'priority.integer' => 'Task priority must be an integer',
            'priority.between' => 'Task priority must be between 1 and 3',
            'title.required' => 'Task title is required',
            'title.string' => 'Task title must be a string',
            'title.max' => 'Task title is too long',
        ];
        // return custom messages for validation errors

    }



}

