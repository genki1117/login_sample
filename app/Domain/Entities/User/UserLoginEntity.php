<?php
namespace App\Domain\Entities\User;

class UserLoginEntity {

    private ?\stdClass $loginUserInfo;

    public function __construct
    (
        ?\stdClass $loginUserInfo = null
    )
    {
        $this->loginUserInfo = $loginUserInfo;
    }

    public function getLoginUserInfo()
    {
        return $this->loginUserInfo;
    }
}