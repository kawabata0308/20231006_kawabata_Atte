<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\RegisteredUser;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
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
            'account_name' => ['required','string','max:191',],
            'account_email' => ['required','email','string','Unique:users',],
            'account_password' => ['required','min:8','max:191','confirmed'],
        ];
    }

    public function create(RegisterRequest $request)
    {
        $user = RegisteredUser::create([
            'account_name' => $request->input('account_name'),
            
            'account_email' => $request->input('account_email'),
            
            'account_password' => Hash::make($request->input('password')),
        ]);

        return view('attendance');

        return redirect()->route('register')
    ->withErrors($validator)
    ->withInput();
    }
}
