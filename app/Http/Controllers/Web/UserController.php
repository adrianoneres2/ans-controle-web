<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use App\Models\User;

class UserController extends Controller
{
    public function teste()
    {
        return view('../teste', ['nome' => 'Juju']);
    }


    public function create()
    {
        return view('../user/create');
    }

    public function store(UserRequest $request, UserService $userService)
    {
      $user = new User($request->name, $request->email, $request->password);
      return $userService->create($user);
    }

}
