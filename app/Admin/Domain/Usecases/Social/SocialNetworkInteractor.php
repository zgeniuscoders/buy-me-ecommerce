<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

class SocialNetworkInteractor
{

    public function __construct(
        public GetAll              $getAll,
        public DeleteSocialNetwork $deleteSocialNetwork,
        public UpdateSocialNetwork $updateSocialNetwork,
        public CreateSocialNetwork $createSocialNetwork,
        public GetSocial           $getSocial
    )
    {
    }

    static function build(SocialNetworkRepository $repository): SocialNetworkInteractor
    {
        return new SocialNetworkInteractor(
            new GetAll($repository),
            new DeleteSocialNetwork($repository),
            new UpdateSocialNetwork($repository),
            new CreateSocialNetwork($repository),
            new GetSocial($repository)
        );
    }

}
