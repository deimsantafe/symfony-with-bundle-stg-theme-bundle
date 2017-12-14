<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../app/bootstrap.php.cache';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();

//configuracion de proxy
$request->setTrustedProxies(array('10.20.8.0/24', '10.20.22.0/24', '10.20.30.0/24', '10.1.4.0/24'));

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
