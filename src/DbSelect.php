<?php
namespace SmartBear;

class DbSelect
{
    public function allPosts()
    {
        // Make available the $db for this function
        global $db;

        $query = "SELECT * FROM posts";
        return $db->callDb($query);
    }
}
