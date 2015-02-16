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
	protected $app;

	/** @var Config */
	protected $config;

	function __construct(Config $config)
	{
		$this->config = $config;
		$this->app = $this->forgeSilex();
		$this->configure();
	}

	protected function forgeSilex(){
		return new Application();
	}

	/**
	 * App生成時に一度だけコールされる。
	 * @param Application $app
	 */
	protected function configure(){
	}

	public function run(Request $request = null){
		$this->app->run($request);
	}


}