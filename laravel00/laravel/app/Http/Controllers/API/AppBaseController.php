<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class AppBaseController
{
    public function sendResponse(mixed $data, string $message){
        return json_encode(['data'=>$data, 'message'=>$message]);
    }

    public function sendError(mixed $error, int $error_code){
        return json_encode(['error'=>$error, 'error_code'=>$error_code]);
    }
}