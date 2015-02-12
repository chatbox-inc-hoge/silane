<?php

return [
	/**
	 * [silex] 
	 *  directly passed to silex
	 */
	"silex" => [

	] ,
	/**
	 * [silane] 
	 *  providers automatically loaded when silex configured
	 *  name is passed config key.
	 *  so each config param must be set under named entry.
	 */
	"silane" => [
		"config"   => "Chatbox\\Silane\\Providers\\ConfigServiceProvider",
		"env"      => "Chatbox\\Silane\\Providers\\EnvServiceProvider",
		"database" => "Chatbox\\Silane\\Providers\\DatabaseServiceProvider",
	],
	"debug" => false,
	"env"=>[
		"key" => "SILANE_ENV",
		"default"=>"local"
	],

];