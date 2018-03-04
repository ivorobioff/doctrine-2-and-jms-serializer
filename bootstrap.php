<?php
/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */

$loader = require __DIR__.'/vendor/autoload.php';

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$setup = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration([__DIR__.'/src/Data'], true, null, null, false);

$em = \Doctrine\ORM\EntityManager::create([
    'driver' => 'pdo_sqlite',
    'path' => __DIR__.'/db.sqlite'
], $setup);

$app = new \Developer2010\App();

$app->setEntityManager($em);


return $app;