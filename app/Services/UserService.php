<?php

namespace App\Services;

use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Cache\Repository;

class UserService
{
    public function criar(User $user)
    {
        $userRepository = new UserRepository;
        return $userRepository->create($user->toArray());
    }

    public function all()
    {
        $userRepository = new UserRepository;
        return $userRepository->all();
    }
}
