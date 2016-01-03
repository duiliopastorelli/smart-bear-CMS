<?php
namespace SmartBear;

class DbInsert
{
    public function post($postdata)
    {
        // Make available the $db for this function
        global $db;

        // Serialize the category array only if it's not empty
        if (!empty($postdata['post_category'])) {
            $category = serialize($postdata['post_category']);
        } else {
            // Assign a null value to the category just to fill the field into the db
            $category = NULL;
        }

        $query = "INSERT INTO posts (post_title, post_content, post_category)
        VALUES ('$postdata[post_title]', '$postdata[post_content]', '$category')";

        // Pass the $query to the db insert function
        return $db->callDb($query);
    }
}
