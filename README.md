# koredis

This module is a wrapper of [phpredis](https://github.com/nicolasff/phpredis) for kohana3.x.
So make sure you have installed [phpredis](https://github.com/nicolasff/phpredis) before you start.

## Installation

	git submodule add git://github.com/JeremyWei/koredis.git modules/koredis
	git submodule update --init --recursive

## Using

Enable:

	Kohana::modules(array(
		 //'auth'       => MODPATH.'auth',       // Basic authentication
		 'cache'      => MODPATH.'cache',      // Caching with multiple backends
		 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
		 'database'   => MODPATH.'database',   // Database access
		// 'image'      => MODPATH.'image',      // Image manipulation
		// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
		 'unittest'   => MODPATH.'unittest',   // Unit testing
		// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
		 'koredis'   => MODPATH.'koredis',           // Redis
		));

Example:

	$redis = Koredis::factory();
	$redis->set('foo', 'bar');
	$redis->get('foo');