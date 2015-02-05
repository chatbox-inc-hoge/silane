<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/05
 * Time: 11:19
 */

require __DIR__ . "/../vendor/autoload.php";

use Chatbox\PHPUtil;

if(isset($_POST["file"]) && isset($_POST["data"])){
	file_put_contents(__DIR__."/image/{$_POST["file"]}",PHPUtil::dataUriToBinary($_POST["data"]));

	$_POST["data"] = ["cant view data"];
	$message = "successfully update";
}else{
	$message = "error ";
}

\Chatbox\HTTP::renderJSON([
	"message" => $message,
	"post"=>$_POST,
	"file"=>$_FILES
]);
exit;