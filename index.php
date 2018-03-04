<?php
/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */

/**
 * @var \Developer2010\App $app
 */
$app = require_once  __DIR__.'/bootstrap.php';

$em = $app->getEntityManager();

$builder = new \JMS\Serializer\SerializerBuilder();

$builder->setObjectConstructor(new \JMS\Serializer\Construction\DoctrineObjectConstructor(
    new \Developer2010\ManagerRegistry($em),
    new \JMS\Serializer\Construction\UnserializeObjectConstructor()
));


$serializer = $builder->build();

/**
 * @var \Developer2010\Data\Token $token
 */
$token = $serializer->deserialize(json_encode([
    'name' => 'Token #10',
    'filter' => [
        'placeholder' => 'Search...',
        'name' => 'input',
    ]
]), \Developer2010\Data\Token::class, 'json');

$em->persist($token);
$em->flush();


print_r($token->getFilter()->getPlaceholder());