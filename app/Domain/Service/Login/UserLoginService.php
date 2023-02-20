<?php
declare(strict_types=1);
namespace App\Domain\Service\Login;

use App\Http\Responses\UserLoginResponse;
use Illuminate\Support\Facades\Hash;
use App\Domain\Interface\Login\UserLoginInterface;

/**
 * ログインサンプル
 */
class UserLoginService
{
    /** @var UserLoginResponse $userLoginResponse */
    private $userLoginResponse;

    /** @var UserLoginInterface $userLoginInterface */
    private $userLoginInterface;

    public function __construct
    (
        UserLoginResponse $userLoginResponse,
        UserLoginInterface $userLoginInterface
    )
    {
        $this->userLoginResponse = $userLoginResponse;
        $this->userLoginInterface = $userLoginInterface;
    }

    /**
     * ログイン処理サービス
     *
     * @param string $inputEmail
     * @param string $inputPassword
     * @return UserLoginResponse
     */
    public function loginService(string $inputEmail, string $inputPassword): UserLoginResponse
    {
        $getUserResult = $this->userLoginInterface->getUserForEmail(inputEmail: $inputEmail);

        // パスワードチェック
        if (Hash::check($inputPassword, $getUserResult->getLoginUserInfo()->hashPassword)) {
            // ログイン成功
            return $this->userLoginResponse->loginSuccess();
        }
        // ログイン失敗
        return $this->userLoginResponse->loginFailed();
    }
}