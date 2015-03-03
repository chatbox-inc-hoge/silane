<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/03/01
 * Time: 19:44
 */

namespace Chatbox\Silane\Providers;

use Pimple\ServiceProviderInterface;
use Chatbox\Silane\Response\JsonStatusResponse;

class RestErrorHandlerProvider implements ServiceProviderInterface{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param \Pimple\Container $pimple An Container instance
     */
    public function register(\Pimple\Container $pimple)
    {
        set_error_handler(function($errno, $errstr, $errfile, $errline ){
            if (!(error_reporting() & $errno)) {
                // This error code is not included in error_reporting
                return;
            }
            throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
        });
        $pimple->error(function (\Exception $e) {
            switch ($e->getCode()) {
                case 404:
                    $message = 'The requested page could not be found.';
                    break;
                default:
                    $message = 'We are sorry, but something went terribly wrong.';
            }

            return JsonStatusResponse::error($e);
        });

    }


} 