<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/02/03
 * Time: 0:12
 */

namespace Chatbox\Album\HTTP;

use Silex\Application;

class API {

    static public function boot($param){
        $obj = new static($param);
        return $obj;
    }

    /**
     * 色々アクセサ伸ばすのめんどいしpublicでOK
     * @var Application
     */
    public $app;

    function __construct($param)
    {
        $this->app = new Application($param);
    }

    protected function configure(){
        $this->app["books.controller"] = $this->app->share(function(){
            return new \Chatbox\Album\HTTP\Route\Book();
        });
        $this->app->get("/book/list","books.controller:actionList");
    }

    public function run(){
        $this->configure();
        $this->app->run();
    }




} 