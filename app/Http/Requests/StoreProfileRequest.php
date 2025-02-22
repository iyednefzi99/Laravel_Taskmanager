<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
            //
            //

            'phone' => 'nullable|string|max:255',//
            'address' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'bio' => 'nullable|string|max:255',
            'user_id' => 'nullable|integer|exists:users,id'

            // Add more fields as needed
            // Example: 'first_name' => 'nullable|string|max:255',
            // Example: 'last_name' => 'nullable|string|max:255',
            // Example: 'email' => 'nullable|string|email|max:255|unique:users,email',
            // Example: 'password' => 'nullable|string|min:8|confirmed',
            // Example: 'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // Example: 'gender' => 'nullable|string|in:male,female,other',
            // Example: 'country' => 'nullable|string|max:255',
            // Example: 'city' => 'nullable|string|max:255',
            // Example: 'zip_code' => 'nullable|string|max:255',
            // Example: 'occupation' => 'nullable|string|max:255',
            // Example: 'education' => 'nullable|string|max:255',
            // Example: 'work_experience' => 'nullable|string|max:255',
            // Example: 'languages' => 'nullable|string|max:255',
            // Example: 'skills' => 'nullable|string|max:255',
            // Example: 'hobbies' => 'nullable|string|max:255',
            // Example: 'interests' => 'nullable|string|max:255',

        ];
    }
    public function messages()
    {
        return [
            'phone.max' => 'Phone number cannot be longer than 255 characters.',
            'address.max' => 'Address cannot be longer than 255 characters.',
            'date_of_birth.date' => 'Invalid date format. Please use the format YYYY-MM-DD.',
            'bio.max' => 'Bio cannot be longer than 255 characters.',
            'user_id.exists' => 'User not found.',
            // Add more messages as needed
            // Example: 'first_name.required' => 'First name is required.',
            // Example: 'last_name.required' => 'Last name is required.',
            // Example: 'email.required' => 'Email is required.',
            // Example: 'password.required' => 'Password is required.',
            // Example: 'password.confirmed' => 'Password confirmation does not match.',
            // Example: 'image.image'
            // Example: 'image.mimes' => 'Invalid image format. Please use JPG, PNG, or JPEG.',
            // Example: 'image.max' => 'Image file size is too large. Maximum size allowed is 2MB.',
            // Example: 'gender.in' => 'Invalid gender. Please use male, female, or other.',
            // Example: 'country.required' => 'Country is required.',
            // Example: 'city.required' => 'City is required.',
            // Example: 'zip_code.required' => 'Zip code is required.',
            // Example: 'occupation.required' => 'Occupation is required.',
            // Example: 'education.required' => 'Education is required.',
            // Example: 'work_experience.required' => 'Work experience is required.',
            // Example: 'languages.required' => 'Languages are required.',
            // Example:'skills.required' => 'Skills are required.',
            // Example: 'hobbies.required' => 'Hobbies are required.',
            // Example: 'interests.required' => 'Interests are required.',
        ];
    }

}
