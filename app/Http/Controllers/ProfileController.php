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

        $statusCode = 201;

        return response()->json( $data, $statusCode );

    }
}
