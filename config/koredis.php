<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'host' => '127.0.0.1', // ip address or Unix socket(for example: /tmp/redis.sock), 127.0.0.1 default
	'port' => 6379,        // port, 6379 default
	'timeout' => 1,        // timeout, 1s default
	'pconnect' => TRUE,    // whether using pconnect, TRUE default
);