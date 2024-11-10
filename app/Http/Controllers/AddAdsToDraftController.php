<?php

namespace App\Http\Controllers;

use App\Admin\Domain\Usecases\Ads\AdsInteractor;
use App\Core\Domain\Enums\StatusEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AddAdsToDraftController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,AdsInteractor $adsInteractor): RedirectResponse
    {
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads/images', 'public');
        }

        $adsInteractor->addAds->run(array_merge($request->all(), [
            "image" => $imagePath,
            "status" => StatusEnum::DRAFT->value
        ]));

        return redirect()->back()->with(["message" => "Ad has been added to draft"]);
    }
}
