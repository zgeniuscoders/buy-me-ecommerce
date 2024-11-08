<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\PasswordChangeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
