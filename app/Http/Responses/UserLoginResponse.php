<?php
namespace app\Http\Responses;

/**
 * ログインサンプル
 */
class UserLoginResponse {

    public function getLoginResponse()
    {
        return view('User.Login');
    }

    public function loginSuccess()
    {
        return dd('login成功');
    }

    public function loginFailed()
    {
        return dd('login失敗');
    }
}