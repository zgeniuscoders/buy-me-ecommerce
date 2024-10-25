<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PasswordChangeRequest;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PasswordChangeRequest $request)
    {
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages(["current_password" => ["Le mot de passe actuel est incorrect"]]);
        }

        Auth::user()->updated(["password" => Hash::make($request->password)]);
        return redirect()->back();
    }
}
