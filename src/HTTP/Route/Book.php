<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/02/03
 * Time: 0:22
 */

namespace Chatbox\Album\HTTP\Route;

use Symfony\Component\HttpFoundation\JsonResponse;

class Book {

    function __construct()
    {
    }

    public function actionList(){
        return JsonResponse::create(["hogehoge"=>"pipyopiyo"]);
    }


} 