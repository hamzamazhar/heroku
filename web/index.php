<?php

require('../vendor/autoload.php');
//require('/views/index.html');

$client = new MongoDB\Client("mongodb://hamzamazhar4094:sgk=2000@ds137090.mlab.com:37090/database4094");

$companydb = $client->database4094;

//$result1 = $companydb->createCollection("employeeCollection1");

