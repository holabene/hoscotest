<?php

use Zend\Mvc\Application;
use Zend\Stdlib\ArrayUtils;
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

include __DIR__ . '/../vendor/autoload.php';

$appConfig = require __DIR__ . '/../config/application.config.php';

Application::init($appConfig)->run();
