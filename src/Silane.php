<?php
namespace Chatbox;

use Chatbox\Config\Config;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class Silane
 * silexラッパー。
 * デフォルトのConfigファイルをベースに、
 * デフォルトサービスの読み込みを逐次行っていく。
 *
 * コンテナに依存するメソドをガンガン生やせる無法地帯。
 *
 * @package Chatbox
 */
class Silane{
	/** @var Application */
	private $app;

	/** @var Config */
	private $config;

	function __construct(Config $config)
	{
		$this->config = $config;
	}

	/**
	 * @return Application
	 */
	public function app(){
		(!$this->app) && ($this->app = $this->bootUpSilex());
		return $this->app;
	}

	/**
	 * create & configure silex application
	 * @return Application
	 */
	protected function bootUpSilex(){
		$app = new Application($this->config["silex"]);
		$this->configure($app);
		return $app;
	}

	/**
	 * @return Config
	 */
	public function config(){
		return $this->config;
	}

	/**
	 * App生成時に一度だけコールされる。
	 * @param Application $app
	 */
	public function configure(Application &$app){
		foreach($this->config["providers"] as $name => $provider){
			$app->register(new $provider());
		}

	}

	public function run(Request $request = null){
		$this->app()->run($request);
	}


}