<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/01/21
 * Time: 12:15
 */

namespace Chatbox\Invitation;

use \Chatbox\TmpData\TmpDataProvider;

class Invitation {

    /**
     * @var MailSenderInterface
     */
    public $sender;

    /**
     * @var TmpDataProvider
     */
    public $tmpData;

    function __construct($sender, TmpDataProvider $tmpData)
    {
        $this->sender = $sender;
        $this->tmpData = $tmpData;
    }


    public function send($adress,$param){
        $key = $this->makeRandStr(8);
        $param["mail"] = $adress;
        $this->tmpData->set($key,$param);
        return $key;
    }

    public function makeRandStr($length = 8) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0; $i < $length; ++$i) {
            $str .= $chars[mt_rand(0, 61)];
        }
        return $str;
    }

    public function validate($key){
        if($token = $this->tmpData->read($key)){
            //$token->
            return true;
        }else{
            return false;
        }
    }

    public function delete($key){

    }

} 