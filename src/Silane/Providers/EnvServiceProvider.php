<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/10
 * Time: 20:31
 */

namespace Chatbox\Silane\Providers;


use Chatbox\Arr;
use Silex\Application;
use Silex\ServiceProviderInterface;

class EnvServiceProvider implements ServiceProviderInterface{

	protected $name;

	function __construct(array $param = [])
	{
		$key = Arr::get($param,"key");
		$key = Arr::get($param,"default");
		$this->name = $this->get($key,"development");
	}

	protected function get($key,$default=null){
		$source = (php_sapi_name() === "cli-server")?$_ENV:$_SERVER;
		return Arr::get($source,$key,$default);
	}

	/**
	 * Registers services on the given app.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Application $app An Application instance
	 */
	public function register(Application $app)
	{
		$app["env"] = $this;
	}

	/**
	 * Bootstraps the application.
	 *
	 * This method is called after all services are registered
	 * and should be used for "dynamic" configuration (whenever
	 * a service must be requested).
	 */
	public function boot(Application $app)
	{
		//nothing to do
	}


} 