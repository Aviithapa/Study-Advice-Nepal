<?php

namespace App\Http\Requests\Expert;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpertRequest extends FormRequest
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
            // Personal info
            'name_of_expert' => 'required|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'affiliation' => 'nullable|string|max:255',
            'key_expertise' => 'nullable|string',
            'experience' => 'nullable|integer|min:0',

            // Trainings
            'trainings_attended' => 'nullable|string',
            'trainings_delivered' => 'nullable|string',
            'training_materials' => 'nullable|array',
            'training_materials.*' => 'file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:5120',

            // Availability & Compensation
            'availability' => 'required|boolean',
            'expected_compensation' => 'nullable|string|max:255',
            'availability_to_contribute' => 'nullable|string',

            // Documents
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'letter_of_motivation' => 'nullable|string',
            'details_of_experience' => 'nullable|string',
            'brief_summary' => 'nullable|string',
            'additional_information' => 'nullable|string',
            'preferred_area_of_engagement' => 'nullable|string|max:255',
        ];
    }
}
