<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/17
 * Time: 16:51
 */

namespace Chatbox\Silane\Response\JSON;


use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ResponseError
 * @package Chatbox\Silane\Response\JSON
 * @deprecated
 */
class ResponseError extends JsonResponse{

	static public function create($data = null, $status = 500, $headers = array())
	{
		if(is_array($data)){
			$data = $data+[
					"status" => "ERROR",
				];
		}else if($data instanceof \Exception){
			$data = [
					"status" => "ERROR",
					"code" => $data->getCode(),
					"message" => $data->getMessage(),
					"line" => $data->getLine(),
					"file" => $data->getFile(),
					"trace" => $data->getTrace(),
				];
		}else{
			throw new \Exception("invalid argument supplied");
		}
		return parent::create($data, $status, $headers);
	}


} 