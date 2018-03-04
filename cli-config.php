<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

/**
 * @var \Developer2010\App $app
 */
$app = require_once __DIR__.'/bootstrap.php';

$entityManager = $app->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);