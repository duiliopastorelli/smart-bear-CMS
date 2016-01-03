<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/config.php';

if (!empty($_POST)) {
    // Make available the $db to other classes
    $db = new SmartBear\DB(HOST, USER, PASSWORD, DATABASE);

    // DbInsert manage the custom insertion into the db
    $insert = new SmartBear\DbInsert;
    if($insert->post($_POST)) {
        echo "<p>Data inserted successfully! :D</p>";
    };
}
?>

<pre><?php print_r($_POST); ?></pre>
<?php
    $select = new SmartBear\DbSelect;
?>
<pre><?php print_r($select->allPosts()); ?></pre>
<pre><?php print_r($select->post(1)); ?></pre>
<pre><?php print_r($select->post(22)); ?></pre>
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
