<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/config.php';

//make available the $db to other classes
$db = new SmartBear\DB(HOST, USER, PASSWORD, DATABASE);

// print_r($db->insert("INSERT INTO posts (post_title, post_content, post_category)
// VALUES ('title', 'content', 'category')"));

$insert = new SmartBear\DbInsert;
print_r($insert->post());
?>

<pre><?php print_r($_POST); ?></pre>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insert Post</title>
    </head>
    <body>
        <form method="post">
            <p>
                <input type="text" name="post_title">
            </p>
            <p>
                <textarea name="post_content" rows="8" cols="40"></textarea>
            </p>
            <p>
                <label for="post_category">Cat 1</label>
                <input type="checkbox" name="post_category[0]" value="cat1">
                <br>
                <label for="post_category">Cat 2</label>
                <input type="checkbox" name="post_category[1]" value="cat2">
            </p>
            <p>
                <input type="submit" name="submit" value="Submit">
            </p>
        </form>
    </body>
</html>
