<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Responses\UserLoginResponse;
use App\Domain\Service\Login\UserLoginService;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    /** @var UserLoginResponse $userLoginResponse */
    private $userLoginResponse;

    /** @var UserLoginService $userLoginService */
    private $userLoginService;

    public function __construct
    (
        UserLoginResponse $userLoginResponse,
        UserLoginService $userLoginService
    )
    {
        $this->userLoginResponse = $userLoginResponse;
        $this->userLoginService = $userLoginService;
    }

    /**
     * ログイン画面表示
     *
     * @return View
     */
    public function index(): View
    {
        return $this->userLoginResponse->getLoginResponse();
    }

    /**
     * ログイン処理
     *
     * @param Request $request
     * @return UserLoginResponse
     */
    public function login(Request $request): UserLoginResponse
    {
        $inputEmail = $request->email;
        $inputPassword = $request->password;

        // ログイン処理
        return $this->userLoginService->loginService(
            inputEmail: $inputEmail,
            inputPassword: $inputPassword
        );
    }
}
