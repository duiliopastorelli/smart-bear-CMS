<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

// use SmartBear\Address\Address;

echo "Hello World!";

$p = new SmartBear\Address();
echo $p->getAddress($_GET);

var_dump($_GET);
