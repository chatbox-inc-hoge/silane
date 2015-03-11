<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/03/01
 * Time: 19:44
 */

namespace Chatbox\Silane\Providers;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Chatbox\Silane\Response\JsonStatusResponse;

class RestErrorHandlerProvider implements ServiceProviderInterface{
	/**
	 * Registers services on the given app.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 */
	public function register(Application $app)
	{
		set_error_handler(function($errno, $errstr, $errfile, $errline ){
			if (!(error_reporting() & $errno)) {
				// This error code is not included in error_reporting
				return;
			}
			throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
		});
		$app->error(function (\Exception $e) {
			return JsonStatusResponse::error($e);
		});
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
		// TODO: Implement boot() method.
	}

} 