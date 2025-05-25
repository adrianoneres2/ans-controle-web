<?php

namespace App\DTO\User;

class UserUpdatePasswordDTO
{
    public $password;
    public $confirmPassword;
    public $email;

    public function __construct(String $email, String $password, String $confirmPassword)
    {
        $this->password        = $password;
        $this->confirmPassword = $confirmPassword;
        $this->email           = $email;
    }
}
