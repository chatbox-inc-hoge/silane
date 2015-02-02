<?php
/**
 */

return [
    "connections" => [
        "default" => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'misaki',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
    "schema" => [
        "tmp_mail" => \Chatbox\TmpData\SchemaBuilder::getBuilder()
    ],
    "includes" => [
        "album" => __DIR__."/schema/database.php",
    ],
];