<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/03/01
 * Time: 19:44
 */

namespace Chatbox\Silane\Providers;

use Chatbox\PHPUtil;
use Chatbox\Silane;
use Silex\Application;
use Silex\ServiceProviderInterface;
use Chatbox\Silane\Response\JsonStatusResponse;

class BootEloquentProvider implements ServiceProviderInterface{
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

	/**
	 * Registers services on the given app.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 */
	public function register(Application $app)
	{
	    if($app instanceof Silane){
		    $config = $app->getConfig()->get("database.default");
		    PHPUtil::bootEloquent($config);
	    }else{
		    throw new Exception("this provider is to be used with Silane");
	    }
	}




//
//	/**
//     * Registers services on the given container.
//     *
//     * This method should only be used to configure services and parameters.
//     * It should not get services.
//     *
//     * @param Silane $silane An Container instance
//     */
//    public function register(Silane $silane)
//    {
//	    if($pimple instanceof Silane){
//		    $config = $pimple->getConfig()->get("database.default");
//		    PHPUtil::bootEloquent($config);
//	    }else{
//		    throw new Exception("this provider is to be used with Silane");
//	    }
//    }


} 