<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Profile\Domain\Usecases\account\AccountInteractor;
use App\Profile\Framework\Requests\PasswordChangeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws ValidationException
     */
    public function __invoke(PasswordChangeRequest $request, AccountInteractor $accountInteractor): \Illuminate\Http\RedirectResponse
    {
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages(["current_password" => ["Le mot de passe actuel est incorrect"]]);
        }

        $userId = Auth::user()->id;
        $accountInteractor->updateAccount->run($userId, ["password" => Hash::make($request->password)]);
        return redirect()->back();
    }
}
