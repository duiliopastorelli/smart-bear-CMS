<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

echo "Hello World!";

$p = new SmartBear\Address();
echo $p->getAddress($_GET);
