<?php

require('../vendor/autoload.php');

$client = new MongoDB\Client("mongodb://hamzamazhar4094:sgk=2000@ds137090.mlab.com:37090/database4094");

$companydb = $client->database4094;

$result1 = $companydb->createCollection("employeeCollection");
