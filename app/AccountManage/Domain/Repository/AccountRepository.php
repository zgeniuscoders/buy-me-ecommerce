<?php 

namespace App\AccountManage\Domain\Repository;


interface AccountRepository{

    public function updatePassword();

    public function updateUsername();

    public function updateProfileImage();

}