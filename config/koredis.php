<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'host' => '127.0.0.1', // ip address or Unix socket(for example: /tmp/redis.sock), default is 127.0.0.1
	'port' => 6379,        // port, default is 6379
	'timeout' => 1,        // timeout, default is 1(s)
	'pconnect' => TRUE,    // whether using pconnect, default is TRUE
);
