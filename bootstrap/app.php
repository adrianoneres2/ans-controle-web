<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
      //$middleware->redirectUsersTo('/home');
      //$middleware->redirectGuestsTo('/login');
     // $middleware->redirectGuestsTo(fn (Request $request) => route('login'));
      //$middleware->redirectUsersTo(fn (Request $request) => route('home'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
