<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/17
 * Time: 16:51
 */

namespace Chatbox\Silane\Response\JSON;


use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseOK extends JsonResponse{

	static public function create($data = null, $status = 200, $headers = array())
	{
		if(is_array($data)){
			$data = $data+[
					"status" => "OK"
				];
			return parent::create($data, $status, $headers);
		}else{
			throw new \Exception("invalid argument supplied");
		}
	}


} 