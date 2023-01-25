<?php

namespace App\Utils;

use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\JsonResponse;

/**
 * Class ResponseHelper
 * @package App\Utils
 * @method static JsonResponse success($data, $message = null, $statusCode = 200)
 * @method static JsonResponse error($errors, $message = null, $statusCode = 400)
 */
class ResponseHelper extends HttpResponse
{
    /**
     * @param string|null $message
     * @param int $statusCode
     * @param array $data
     * @param array $errors
     */
    protected static function responseJson($success, $message = null, $statusCode, $data = [], $errors = [])
    {
        return response()->json([
            "success" => $success,
            "message" => $message,
            "data" => $data,
            "errors" => $errors
        ], $statusCode);
    }

    /**
     * @param array $data
     * @param string|null $message
     * @param int $statusCode
     */
    public static function success($data, $message = null, $statusCode = 200)
    {
        return self::responseJson(true, $message, $statusCode, $data);
    }

    /**
     * @param array $errors
     * @param string|null $message
     * @param int $statusCode
     */
    public static function error($errors, $message = null, $statusCode = 400)
    {
        return self::responseJson(false, $message, $statusCode, [], $errors);
    }
}
