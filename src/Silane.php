<?php
namespace Chatbox;

use Chatbox\Silane\Env;

class Silane {

    /**
     * @var \Silex\Application
     */
    protected $app;

    public function __construnct(array $values = []){
        $this->app = new \Silex\Application($values);
        $this->app->register(new Env());
    }

    public function configure(){
        $this->app["config.baseDir"] = [];

    }

    public function run(Request $request=null){
        $this->configure();
        $this->app->run($request);

    }
}