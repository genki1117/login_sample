<?php
namespace App\Domain\Entities\User;

/**
 * ログインサンプル
 */
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