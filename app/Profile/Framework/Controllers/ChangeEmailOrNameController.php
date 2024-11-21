<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Profile\Domain\Usecases\account\AccountInteractor;
use App\Profile\Framework\Requests\EmailOrPasswordChangeRequest;
use Illuminate\Support\Facades\Auth;

class ChangeEmailOrNameController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(EmailOrPasswordChangeRequest $request, AccountInteractor $accountInteractor): \Illuminate\Http\RedirectResponse
    {
        $userId = Auth::user()->id;
        $accountInteractor->updateAccount->run($userId, $request->all());
        return redirect()->back();
    }
}
