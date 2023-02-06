<?php

namespace App\Http\Controllers\Api\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientLoginRequest;
use App\Http\Requests\Client\ClientCreateRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(ClientLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(!\Auth('web')->attempt($credentials)) {
            return response(['error' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
        }
        $user = \Auth('web')->user();
        $jwt = $user->createToken('token', ['client'])->plainTextToken;
        $cookie = cookie('jwt', $jwt, 60 * 24);

        return response([
            'message' => 'success',
        ])->withCookie($cookie);
    }

    public function create(ClientCreateRequest $request)
    {
        $user = User::create($request->only(
            'first_name',
            'second_name',
            'middle_name',
            'email',
            'phone',
            'address',
            'password'
        ));

        return response($user, Response::HTTP_CREATED);
    }

    public function logout()
    {
        $cookie = \Cookie::forget('jwt');

        return response([
            'message' => 'success',
        ])->withCookie($cookie);
    }
}
