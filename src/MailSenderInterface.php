<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/01/21
 * Time: 12:17
 */

namespace Chatbox\Invitation;


interface MailSenderInterface {

    public function sendMail($address,$param);
} 