<?php
namespace SmartBear;

class DbSelect
{
    public function allPosts()
    {
        // Make available the $db for this function
        global $db;

        $query = "SELECT * FROM posts";
        $result = $db->callDb($query);

        return $this->showData($result);
    }

    public function post($id)
    {
        // Make available the $db for this function
        global $db;

        $query = "
            SELECT * FROM posts
            WHERE ID = '$id'
            ";

        $result = $db->callDb($query);

        return $this->showData($result);
    }

    public function showData($array)
    {
        // Iteract the object from the query
        while ($obj = $array->fetch_object()){
            $results[] = $obj;
        }

        return $results;
    }
}
