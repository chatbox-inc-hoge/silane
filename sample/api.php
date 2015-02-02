<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/02/03
 * Time: 0:11
 */
require __DIR__ . "/../vendor/autoload.php";


\Chatbox\Album\HTTP\API::boot([
    "debug" => true
])->run();