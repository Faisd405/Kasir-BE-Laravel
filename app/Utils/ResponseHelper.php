<?php

namespace App\Utils;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as HttpResponse;

/**
 * Class ResponseHelper
 *
 * @method static JsonResponse success($data, $message = null, $statusCode = 200)
 * @method static JsonResponse error($data, $message = null, $statusCode = 400)
 * @method static JsonResponse notFound($message = null, $statusCode = 404)
 * @method static JsonResponse unauthorized($message = null, $statusCode = 401)
 * @method static JsonResponse forbidden($message = null, $statusCode = 403)
 * @method static JsonResponse internalServerError($message = null, $statusCode = 500)
 */
class ResponseHelper extends HttpResponse
{
    /**
     * @param  bool  $success
     * @param  string|null  $message
     * @param  int  $statusCode
     * @param  array  $data
     */
    protected static function responseJson($success, $message, $statusCode, $data = [])
    {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    /**
     * @param  array  $data
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function success($data, $message = null, $statusCode = 200)
    {
        return self::responseJson(true, $message, $statusCode, $data);
    }

    /**
     * @param  array  $data
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function created($data = [], $message = null, $statusCode = 201)
    {
        return self::responseJson(true, $message, $statusCode, $data);
    }

    /**
     * @param  array  $errors
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function error($data, $message = null, $statusCode = 400)
    {
        return self::responseJson(false, $message, $statusCode, $data);
    }

    /**
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function notFound($message = null, $statusCode = 404)
    {
        return self::responseJson(false, $message, $statusCode);
    }

    /**
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function unauthorized($message = null, $statusCode = 401)
    {
        return self::responseJson(false, $message, $statusCode);
    }

    /**
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function forbidden($message = null, $statusCode = 403)
    {
        return self::responseJson(false, $message, $statusCode);
    }

    /**
     * @param  string|null  $message
     * @param  int  $statusCode
     */
    public static function internalServerError($message = null, $statusCode = 500)
    {
        return self::responseJson(false, $message, $statusCode);
    }
}
