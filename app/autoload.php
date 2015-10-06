<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader->registerNamespaces(array(
	'ROOT' => __DIR__.'/../vendor/autoload.php',
	'JMS' => __DIR__.'/../vendor/bundles',
    'CG' => __DIR__.'/../vendor/cg-library/src'
	)); 


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
