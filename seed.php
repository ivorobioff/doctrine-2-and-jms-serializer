<?php
/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */

/**
 * @var \Developer2010\App $app
 */
$app = require_once  __DIR__.'/bootstrap.php';

$token = new \Developer2010\Data\Token();
$token->setName('Test1');


$filter = new \Developer2010\Data\Filter\Input();
$filter->setPlaceholder('Search...');

$token->setFilter($filter);

$em = $app->getEntityManager();

$em->persist($token);

$em->flush();
