<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    public function index(UserService $userService)
    {
        return $userService->all();
    }

    public function findByEmail($email)
    {
        $userService = new UserService;
        return $userService->findByEmail($email);
    }

    public function store(Request $request, UserService $userService)
    {
      $user = new User($request->name, $request->email, $request->password);
      return $userService->create($user);
    }

    public function destroy($id)
    {
        $userService = new UserService();
        return $userService->delete($id);
    }

    public function findById($id)
    {
        $userService = new UserService();
        return $userService->find($id);
    }
}
