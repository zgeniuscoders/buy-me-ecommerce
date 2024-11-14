<?php

namespace App\Admin\Framework\Controllers\Ads;

use App\Admin\Domain\Usecases\Ads\AdsInteractor;
use App\Core\Domain\Enums\StatusEnum;
use App\Http\Requests\AdsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

readonly class AdsController
{

    public function __construct(public AdsInteractor $adsInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $ads = $this->adsInteractor->getAds->run();
        $createAdsRoute = route("ads.create");

        return Inertia::render("admin/ads/index", compact("ads", "createAdsRoute"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        $addAdsRoute = route("ads.store");
        $addAdsToDraftRoute = route("admin.ads.draft");
        return Inertia::render("admin/ads/create", compact("addAdsRoute", "addAdsToDraftRoute"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request): RedirectResponse
    {
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads/images', 'public');
        }

        $this->adsInteractor->addAds->run(array_merge($request->all(), [
            "image" => $imagePath,
            "status" => StatusEnum::PUBLISH->value
        ]));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {
        $this->adsInteractor->getAdsById->run($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Inertia\Response
    {
        $ads = $this->adsInteractor->getAdsById->run($id);
        $updateAdsRoute = route("ads.update", ["ad" => $ads->id]);
        return Inertia::render("admin/ads/edit", compact("updateAdsRoute", "ads"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $ads = $this->adsInteractor->getAdsById->run($id);

        if (Storage::exists($ads->image)) {
            Storage::delete($ads->image);
        }

        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads/images', 'public');
        }

        $this->adsInteractor->updateAds->run($id, array_merge(
            $request->all(),[
                "image" => $imagePath ? $imagePath : $ads->image,
            ]
        ));

        return redirect()->route("ads.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $ads = $this->adsInteractor->getAdsById->run($id);

        if (Storage::exists($ads->image)) {
            Storage::delete($ads->image);
        }

        $this->adsInteractor->removeAds->run($id);
        return redirect()->route("ads.index");

    }
}
