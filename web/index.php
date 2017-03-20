<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));


$client = new MongoDB\Client("mongodb://hamzamazhar4094:sgk=2000@ds137090.mlab.com:37090/database4094");

$companydb = $client->database4094;

$result1 = $companydb->createCollection("employeeCollection");


$app->run();
