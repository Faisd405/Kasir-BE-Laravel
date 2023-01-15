<?php

namespace App\Utils;

use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\JsonResponse;

/**
 * Class ResponseHelper
 * @package App\Utils
 * @method static JsonResponse success($data, $message = null, $statusCode = 200)
 * @method static JsonResponse error($errors, $message = null, $statusCode = 400)
 * @method static JsonResponse notFound($message = null, $statusCode = 404)
 * @method static JsonResponse unauthorized($message = null, $statusCode = 401)
 * @method static JsonResponse forbidden($message = null, $statusCode = 403)
 * @method static JsonResponse internalServerError($message = null, $statusCode = 500)
 */
class ResponseHelper extends HttpResponse
{
    /**
     * @param string|null $message
     * @param int $statusCode
     * @param array $data
     * @param array $errors
     */
    protected static function responseJson($message = null, $statusCode, $data = [], $errors = [])
    {
        return response()->json([
            "success" => true,
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
        return self::responseJson($message, $statusCode, $data);
    }

    /**
     * @param array $data
     * @param string|null $message
     * @param int $statusCode
     */
    public static function created($data = [], $message = null, $statusCode = 201)
    {
        return self::responseJson($message, $statusCode, $data);
    }

    /**
     * @param array $errors
     * @param string|null $message
     * @param int $statusCode
     */
    public static function error($errors, $message = null, $statusCode = 400)
    {
        return self::responseJson($message, $statusCode, [], $errors);
    }

    /**
     * @param string|null $message
     * @param int $statusCode
     */
    public static function notFound($message = null, $statusCode = 404)
    {
        return self::responseJson($message, $statusCode);
    }

    /**
     * @param string|null $message
     * @param int $statusCode
     */
    public static function unauthorized($message = null, $statusCode = 401)
    {
        return self::responseJson($message, $statusCode);
    }

    /**
     * @param string|null $message
     * @param int $statusCode
     */
    public static function forbidden($message = null, $statusCode = 403)
    {
        return self::responseJson($message, $statusCode);
    }

    /**
     * @param string|null $message
     * @param int $statusCode
     */
    public static function internalServerError($message = null, $statusCode = 500)
    {
        return self::responseJson($message, $statusCode);
    }
}
