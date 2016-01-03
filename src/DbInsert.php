<?php
namespace SmartBear;

class DbInsert
{
    public function post()
    {
        // Make available the $db for this function
        global $db;

        $query = "INSERT INTO posts (post_title, post_content, post_category)
        VALUES ('Post title', 'content', 'category')";

        // Pass the $query to the db insert function
        return $db->insert($query);
    }
}
