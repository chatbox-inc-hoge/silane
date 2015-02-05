<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/05
 * Time: 11:19
 */

require __DIR__ . "/../vendor/autoload.php";

$data = [
	"post"=>$_POST,
	"file"=>$_FILES
];

\Chatbox\HTTP::renderJSON($data);
exit;