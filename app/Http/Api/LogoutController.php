<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $token = $request->input('token');
        
        auth()->logout();

        // //remove token
        // $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        // if($removeToken) {
        //     return redirect('/');
        //     //return response JSON
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Logout Berhasil!',  
        //     ]);
        // }
    }
}