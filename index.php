<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/src/config.php';

// Make available the $db to other classes
$db = new SmartBear\DB(HOST, USER, PASSWORD, DATABASE);

$p = new SmartBear\Address();
$pageData = $p->getAddress($_GET);
?><pre><?php print_r($pageData);?></pre>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <?php foreach ($pageData as $data) { ?>
        <div class="post">
            <h2><?php echo $data->post_title; ?></h2>
            <p><?php echo $data->post_content; ?></p>
        </div>
        <?php } ?>
    </body>
    </html>
