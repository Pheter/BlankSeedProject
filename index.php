<?php

// require Yaml parsing lib
require('../seed/lib/spyc/spyc.php');
$spyc = new Spyc;

// route request and build request object
require('../seed/Request.php');
require('../seed/Router.php');
$router = new Router($spyc->loadFile('routes.yml'));
$request = $router->route(new Request);

// instantiate resource
$resource_name = $request->resource;
require('resources/'.$resource_name.'.php');
$resource = new $resource_name(null, $request->data);

// call requested method
echo call_user_func(array($resource, $request->method), $request->path_parameters);
