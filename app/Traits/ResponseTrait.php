<?php

namespace App\Traits;

trait ResponseTrait
{
    // success response api
    public static function successResponse($message = '',$data = [])
    {
        $response = [
            'success' => 1,
            'message' => $message,
            'data' => $data,
        ];
        return response()->json($response, 200);
    }

    // success response api
    public static function faildResponse($statusCode , $message = '')
    {
        $response = [
            'success' => 0,
            'message' => $message,
        ];
        return response()->json($response, $statusCode);
    }

    //
}
