<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return [
            // Example validation rule for 'title' field:
            'title' =>'required|string|max:255',
            //
            // Example validation rule for 'description' field:
             'description' => 'nullable|string|max:255',
            //
            // Example validation rule for 'priority' field:
             'priority' =>'required|integer|between:1,3',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Task title is required.',
            'title.string' => 'Task title must be a string.',
            'title.max' => 'Task title must not exceed 255 characters.',
            'description.nullable' => 'Task description is optional.',
            'description.string' => 'Task description must be a string.',
            'description.max' => 'Task description must not exceed 255 characters.',
            'priority.required' => 'Task priority is required.',
            'priority.integer' => 'Task priority must be an integer.',
            'priority.between' => 'Task priority must be between 1 and 3.',
        ];
    }
}
