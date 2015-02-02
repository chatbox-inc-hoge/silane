<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/02/02
 * Time: 20:16
 */

namespace Chatbox\Album;

use Illuminate\Database\Capsule\Manager as Capsule;

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

use Symfony\Component\Filesystem\Filesystem;

class Album {

    protected $name;

    protected $baseDir;

    public function __construct(){
        $this->baseDir = __DIR__."/../sample/images/";
        $config = [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'misaki',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ];
        $this->setUpEloquent($config);
    }

    protected function setUpEloquent($config){
        $capsule = new Capsule;

        $capsule->addConnection($config);
        $capsule->setAsGlobal();

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->bootEloquent();
    }

    public function upload($sourceFilePath,array $meta=[]){
        if(file_exists($sourceFilePath) && ($data = file_get_contents($sourceFilePath))){
            //ソースファイルの解析 & 移動
            $fs = new Filesystem();
            $mime = \Chatbox\Filesystem::with()->getMime($sourceFilePath);
            $ext = \Chatbox\Filesystem::with()->getExtFromMime($mime);
            $name = sha1($sourceFilePath.time()).".".$ext;
            $fs->dumpFile($this->baseDir.$name,$data);

            $image = \Chatbox\Album\Eloquent\Image::create([
                "category"=>\Chatbox\Arr::get($meta,"category",""),
                "filename"=>$name,
                "size"=>strlen($data),
                "mime"=>$mime,
                "comment"=>\Chatbox\Arr::get($meta,"comment",""),
                "meta"=>json_encode(\Chatbox\Arr::get($meta,"meta",[])),// TODO FIX MUST PASS ARRAY
            ]);
            return $image;
        }else{
            throw new \Exception("source is not found: $sourceFilePath");
        }


    }



} 