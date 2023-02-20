<?php
namespace App\Domain\Repositories\Login;

use App\Domain\Entities\User\UserLoginEntity;
use App\Domain\Accessers\db\User;
use App\Domain\Interface\Login\UserLoginInterface;

class UserLoginRepository implements UserLoginInterface
{
    /** @var UserModel $user */
    private $UserModel;

    public function __construct(User $user)
    {   
        $this->UserModel = $user;
    }

    /**
     * ユーザ取得リポジトリ
     *
     * @param string $inputEmail
     * @return UserLoginEntity
     */
    public function getUserForEmail(string $inputEmail): UserLoginEntity
    {
        $loginUser = $this->UserModel->getUserInfoForEmail(inputEmail: $inputEmail);
        if (empty($loginUser)) {
            return new UserLoginEntity();
        }
        return new UserLoginEntity($loginUser);
    }
}