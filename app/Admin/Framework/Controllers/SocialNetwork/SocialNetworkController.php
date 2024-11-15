<?php

namespace App\Admin\Framework\Controllers\SocialNetwork;

use App\Admin\Domain\Usecases\Social\SocialNetworkInteractor;
use App\Http\Requests\SocialNetworkRequest;
use App\Http\Requests\UpdateSocialNetworkRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Inertia\Response;

class SocialNetworkController
{

    public function __construct(public SocialNetworkInteractor $networkInteractor)
    {
    }

    public function index(): Response
    {
        $socials = $this->networkInteractor->getAll->run();
        return Inertia::render("admin/social/index", compact("socials"));
    }

    public function create(): Response
    {
        $createSocialRoute = route("admin.social-network.store");
        return Inertia::render("admin/social/create", compact("createSocialRoute"));
    }

    public function store(SocialNetworkRequest $request): RedirectResponse
    {
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products/images', 'public');
        }

        $this->networkInteractor->createSocialNetwork->run(array_merge(
            $request->all(),
            [
                "logo" => URL::to("storage/$imagePath")
            ]
        ));

        return redirect()->route("admin.social-network.index");
    }

    public function edit(int $socialId): Response
    {
        $social = $this->networkInteractor->getSocial->run($socialId);
        $updateSocialRoute = route("admin.social-network.update", ["social_network" => $social->id]);
        return Inertia::render("admin/social/edit", compact("social", "updateSocialRoute"));
    }

    public function update(UpdateSocialNetworkRequest $request, int $id): RedirectResponse
    {
        $imagePath = [];
        if ($request->hasFile('image')) {
            $imagePath["logo"] = $request->file('image')->store('products/images', 'public');
        }

        $this->networkInteractor->updateSocialNetwork->run(array_merge(
            $request->all(),
            $imagePath
        ), $id);

        return redirect()->route("admin.social-network.index");
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->networkInteractor->deleteSocialNetwork->run($id);
        return redirect()->back();
    }
}
