<?php

namespace App\Helpers;

class Response {
    /**
     * @param $status $status is required(true || false)
     * @param null $code Response Error Code or success code(EX: 400,200,401,422,500 etc.)
     * @param null $url This is message of code or any message with the response.
     * @param null $message This is to show message on error.
     * @param array $data If you want to send any return data with response
     * @param null $function This function will call in javascript like deviser(param) (this is your custom function and param will be your data you send).
     * @return array|\Illuminate\Http\JsonResponse
     */
    public static function returnResponse($status, $code = null, $url = null, $message = null, $data = [], $function = null) {
        /** This will check header or any request call, So in api we request for applicaton/json. **/
        if (request()->wantsJson()) {
            $responseData = [
                'status' => $status,
                'message' => $message,
                'code' => $code,
                'data' => ($data === []) ? (object)$data : $data
            ];
            $headers = [];
            $options = 0;
            $code = $code ?? 200;
            return response()->json($responseData, $code, $headers, $options);
        } else {
            return [
                'status' => $status,
                'url' => $url,
                'message' => $message,
                'data' => $data,
                'function' => $function
            ];
        }
    }
}
