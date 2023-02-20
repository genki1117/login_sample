<?php
declare(strict_types=1);
namespace App\Domain\Interface\Login;

use App\Domain\Entities\User\UserLoginEntity;

/**
 * ログインサンプル
 */
interface UserLoginInterface
{
    /**
     * ログインユーザ取得リポジトリ
     *
     * @param string $inputEmail
     * @return UserLoginEntity
     */
    public function getUserForEmail(string $inputEmail): UserLoginEntity;
}