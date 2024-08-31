<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanApplicationRequest extends FormRequest
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
            'first_name' => 'required', 
            'last_name' => 'required', 
            'cell' => 'required', 
            'email' => ['required','email'], 
            'address' => 'required', 
            'loan_amount' => 'required', 
            'loan_purpose' => 'required', 
            'loan_tenure' => 'required', 
            'reason_for_loan' => 'required',  
            'loan_type' => 'required', 
        ];
    }
}
