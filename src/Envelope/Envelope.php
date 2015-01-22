<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/01/21
 * Time: 12:20
 */

namespace Chatbox\Invitation\Envelope;

class Envelope implements \Chatbox\Invitation\MailSenderInterface{

    public $fileName;

    public function render($param){
        $clean_room = function($__file_name, array $__data)
        {
            extract($__data, EXTR_REFS);
            ob_start();
            try{
                include $__file_name;
            }
            catch (\Exception $e){
                ob_end_clean();
                throw $e;
            }
            return ob_get_clean();
        };
        return $clean_room($this->fileName, $param);
    }


    public function sendMail($address, $param)
    {
        // TODO: Implement sendMail() method.
    }


} 