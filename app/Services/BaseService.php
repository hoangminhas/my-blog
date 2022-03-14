<?php

namespace App\Services;

class BaseService
{
    public function sendResponse($data, $msg, $code = 200)
    {
        $response = [
            "success" => true,
            "data" => $data,
            "message" => $msg
        ];

        return response()->json($response, $code);
    }

    public function sendError($data, $msg = [], $code = 404)
    {
        $response = [
            "success" => false,
            "msg" => $msg
        ];

        if (!empty($msg)) {
            $response['data'] = $msg;
        }

        return response()->json($response, $code);
    }

}
