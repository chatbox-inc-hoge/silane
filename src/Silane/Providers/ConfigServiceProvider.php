<?php
/**
 * Created by PhpStorm.
 * User: t.goto
 * Date: 2015/02/12
 * Time: 20:00
 */

namespace Chatbox\Silane\Providers;


use Silex\Application;
use Silex\ServiceProviderInterface;

use Chatbox\Config\Config;

class ConfigServiceProvider implements ServiceProviderInterface{

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
		if($app["env"]){
			$app["config"] = new Config;

		}
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
	}


} 