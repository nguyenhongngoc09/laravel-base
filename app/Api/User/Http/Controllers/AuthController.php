<?php

namespace App\Api\User\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * authenticate and return access token
     *
     * @param  Request $request
     *
     * @return json
     */
    public function login(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = Auth::guard('api_user')->attempt($credentials)) {
                return response()->jsonError('unauthenticated', 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->jsonError('could_not_create_token', 500);
        }

        return response()->jsonOk(compact('token'));
    }
}