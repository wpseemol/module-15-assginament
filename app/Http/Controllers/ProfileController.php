<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    function Profile( Request $request ): JsonResponse {

        $id = $request->id;

        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id'   => $id,
            'name' => $name,
            'age'  => $age,
        ];

        $statusCode = 200;

        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $http_only = true;

        $cookie = cookie( $name, $value, $minutes, $path, $domain, $secure, $http_only );

        return response()->json( $data, $statusCode )->cookie( $cookie );
    }
}
