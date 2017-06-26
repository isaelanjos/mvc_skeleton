<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("./src");
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode);
$config->setMetadataDriverImpl(
    new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
        new Doctrine\Common\Annotations\CachedReader(
            new Doctrine\Common\Annotations\AnnotationReader(),
            new Doctrine\Common\Cache\ArrayCache()
        ),
        $paths
    )
);

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'dbuser',
    'password' => 'dbpass',
    'dbname'   => 'mydb',
);

$entityManager = EntityManager::create($dbParams,$config);