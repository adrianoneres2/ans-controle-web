<?php

namespace App\Services;

use App\Constants\MessageConstant;
use App\Models\User;
use App\Repository\UserRepository;
use App\DTO\User\UserUpdatePasswordDTO;

class UserService
{
    public function create(User $user)
    {
        $userRepository = new UserRepository;
        if($userRepository->create($user->toArray()))
        {
            return MessageConstant::ARRAY_MESSAGE_DEFAULT_SUCCESS;
        }
        return MessageConstant::ARRAY_MESSAGE_DEFAULT_ERROR;
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

    public function updatePassword(UserUpdatePasswordDTO $userUpdatePasswordDTO)
    {
        $user = $this->findByEmail($userUpdatePasswordDTO->email);
        if(is_null($user))
        {
            return MessageConstant::ARRAY_MESSAGE_NOT_FOUND;
        }

        if ($userUpdatePasswordDTO->password === $userUpdatePasswordDTO->confirmPassword)
        {
            $userRepository = new UserRepository;
            if($userRepository->update($user->id, ['password' => password_hash($userUpdatePasswordDTO->confirmPassword, PASSWORD_BCRYPT)]) == MessageConstant::SUCCESS)
            {
                return MessageConstant::ARRAY_MESSAGE_DEFAULT_SUCCESS;
            }
            return MessageConstant::ARRAY_MESSAGE_DEFAULT_ERROR;
        }
        return MessageConstant::ARRAY_MESSAGE_PASSWORD_NOT_EQUAL;
    }
}
