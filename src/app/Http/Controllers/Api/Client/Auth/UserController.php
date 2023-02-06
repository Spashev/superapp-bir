<?php

namespace App\Http\Controllers\Api\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientInfoUpdateRequest;
use App\Http\Requests\Client\ClientPasswordUpdateRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function user(Request $request)
    {
        return $request->user();
    }

    public function updateInfo(ClientInfoUpdateRequest $request)
    {
        $user = $request->user();
        $user->update($request->only(
            'first_name',
            'second_name',
            'middle_name',
            'email',
            'phone',
            'address'
        ));

        return response($user, Response::HTTP_ACCEPTED);
    }

    public function updatePassword(ClientPasswordUpdateRequest $request)
    {
        $user = $request->user();
        $user->update([
            'password' => \Hash::make($request->password)
        ]);

        return response($user, Response::HTTP_ACCEPTED);
    }
}
