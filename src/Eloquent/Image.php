<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/01/22
 * Time: 0:00
 */

namespace Chatbox\Album\Eloquent;


class Image extends \Chatbox\TmpData\Eloquent\TmpData{

    protected $table = "album_image";

    protected $fillable = ["category","filename","size","mime","comment","meta"];
} 