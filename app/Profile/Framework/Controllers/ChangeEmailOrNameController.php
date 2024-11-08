<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\EmailOrPasswordChangeRequest;
use Illuminate\Support\Facades\Auth;

class ChangeEmailOrNameController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(EmailOrPasswordChangeRequest $request)
    {
        Auth::user()->updated($request->all());
        return redirect()->back();
    }
}
