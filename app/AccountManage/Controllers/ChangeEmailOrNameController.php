<?php

namespace App\AccountManage\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmailOrPasswordChangeRequest;

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
