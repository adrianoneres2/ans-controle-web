<?php

namespace App\Services;

use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Cache\Repository;

class UserService
{
    public function create(User $user)
    {
        $userRepository = new UserRepository;
        return $userRepository->create($user->toArray());
    }

    public function all()
    {
        $userRepository = new UserRepository;
        return $userRepository->all();
    }

    public function findByEmail($email)
    {
       $userRepository = new UserRepository;
       return $userRepository::findByEmail($email);
    }

    public function delete($id)
    {
        $userRepository = new UserRepository;
        return $userRepository->delete($id);
    }

    public function find($id)
    {
        $userRepository = new UserRepository;
        return $userRepository->find($id);
    }
}
