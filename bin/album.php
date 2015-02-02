<?php

use \Symfony\Component\Console\Application;

if(!class_exists("\\Chatbox\\Album\\Album")){
    echo "you need to install local migrate.".PHP_EOL;
    exit(1);
}

$console = new Application();
$console->add(new Chatbox\Album\Command\Sync());
$console->add(new Chatbox\Album\Command\Test());

$console->run();

