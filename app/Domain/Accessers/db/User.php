<?php

namespace App\Domain\Accessers\db;

use Illuminate\Support\Facades\DB;
use stdClass;

class User{
    protected $table = 'users';

    /**
     * ログインユーザ取得
     *
     * @param string $inputEmail
     * @return \stdClass|null
     */
    public function getUserInfoForEmail(string $inputEmail): ?\stdClass
    {
        return DB::table($this->table)
        ->select(
            'id',
            'name',
            'password as hashPassword'
        )
        ->where('email', '=', $inputEmail)
        ->first();
    }
}