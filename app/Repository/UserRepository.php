<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\AbstractRepository;

class UserRepository extends AbstractRepository
{
    protected static $model = User::class;

    public static function findByEmail($email)
    {
        return self::loadModel()::query()->where(['email' => $email]);
    }
}
