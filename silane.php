<?php

return [
	"debug" => false,
	"env"=>[
		"key" => "SILANE_ENV",
		"default"=>"local"
	],
	/**
	 * directly passed to silex
	 */
	"silex" => [

	] ,
	/**
	 * providers automatically loaded when silex configured
	 */
	"providers" => [
		"config"   => "Chatbox\\Silane\\Providers\\ConfigServiceProvider",
		"env"      => "Chatbox\\Silane\\Providers\\EnvServiceProvider",
		"database" => "Chatbox\\Silane\\Providers\\DatabaseServiceProvider",
	]
];