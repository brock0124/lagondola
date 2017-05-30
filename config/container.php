<?php

use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;
use Zend\Expressive\Helper\UrlHelper;
use Zend\Expressive\Helper\UrlHelperFactory;

// Load configuration
$config = require __DIR__ . '/config.php';

// Build container
$container = new ServiceManager();
(new Config($config['dependencies']))->configureServiceManager($container);

// Inject config
$container->setService('config', $config);

$container->setFactory(UrlHelper::class, UrlHelperFactory::class);

return $container;
