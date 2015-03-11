<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/03/02
 * Time: 14:23
 */

namespace Chatbox\Silane\Response;

use Symfony\Component\HttpFoundation\JsonResponse;

class JsonStatusResponse extends JsonResponse{

    public static function ok($data = null, $status = 200, $headers = array())
    {
        $data = (array)$data + [
                "status" => "OK"
        ];
        return parent::create($data, $status, $headers); // TODO: Change the autogenerated stub
    }
    public static function bad($data = null, $status = 400, $headers = array())
    {
	    if(is_string($data)){
		    $data = [
			    "msg" => $data
		    ];
	    }
        $data = (array)$data + [
                "status" => "BAD"
        ];
        return parent::create($data, $status, $headers); // TODO: Change the autogenerated stub
    }
    public static function error(\Exception $e, $status = 500, $headers = array())
    {
        $data = [
            "status" => "ERROR",
            "code" => $e->getCode(),
////            "message" => $e->getMessage(),
            "message" => substr($e->getMessage(),0,150),
            "line" => $e->getLine(),
            "file" => $e->getFile(),
            "class" => get_class($e),
//            "trace" => $e->getTrace(),
        ];
        return parent::create($data, $status, $headers); // TODO: Change the autogenerated stub
    }


} 