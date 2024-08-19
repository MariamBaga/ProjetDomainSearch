<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Allow all users to make this request
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'phone' => 'required|string|max:15|unique:users',
            'country' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le champ nom est requis.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'email.required' => "L'adresse e-mail est requise.",
            'email.email' => "L'adresse e-mail doit être au format valide.",
            'email.unique' => "L'adresse e-mail est déjà utilisée.",
            'password.required' => 'Le mot de passe est requis.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'phone.required' => 'Le numéro de téléphone est requis.',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'phone.max' => 'Le numéro de téléphone ne doit pas dépasser 15 caractères.',
            'phone.unique' => 'Le numéro de téléphone est déjà utilisé.',
            'country.required' => 'Le champ pays est requis.',
            'country.string' => 'Le pays doit être une chaîne de caractères.',
            'country.max' => 'Le pays ne doit pas dépasser 255 caractères.',
            'photo.image' => 'La photo doit être une image.',
            'photo.mimes' => 'La photo doit être un fichier de type : jpeg, png, jpg.',
            'photo.max' => 'La photo ne doit pas dépasser 2 Mo.',
        ];
    }
}
