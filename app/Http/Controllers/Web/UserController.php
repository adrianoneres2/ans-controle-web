<?php

namespace App\Http\Controllers\Web;

use App\Constants\MessageConstant;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use App\Models\User;
use App\DTO\User\UserUpdatePasswordDTO;
use App\Http\Requests\UserRequestUpdatePassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function user()
    {
        return view('../user/user');
    }

    public function create()
    {
        return view('../user/create');
    }

    public function details()
    {
        $userService = new UserService;
        $users = $userService->findByEmail(Auth::user()->email);
        return view('../user/details')->with('users', $users);
    }

    public function updatePassword()
    {
        return view('../user/update-password');
    }

    public function store(UserRequest $request, UserService $userService)
    {
      $user = new User($request->name, $request->email, $request->password);
      $arrayReturn = $userService->create($user);
      return redirect(route('user.view.create'))->with($arrayReturn['code_message'], $arrayReturn['message']);
    }

    public function storePassword(UserRequestUpdatePassword $request, UserService $userService)
    {
      $userUpdatePassword = new UserUpdatePasswordDTO($request->email, $request->password, $request->confirmPassword);
      $arrayReturn = $userService->updatePassword($userUpdatePassword);
      return redirect()->back()->with($arrayReturn['code_message'], $arrayReturn['message']);
    }

    public function userDetails(Request $request, UserService $userService)
    {
       $users = $userService->findByEmail($request->email ? $request->email : Auth::user()->email);
       return view('../user/details', compact('users'));
    }
}
