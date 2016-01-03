<?php
namespace SmartBear;

class DB
{
    public function __construct($host, $user, $password, $database)
    {
        // Build up the var
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        // Use the php mysqli class to connect to the db
        $mysqli = new \mysqli($this->host, $this->user, $this->password, $this->database);

        // Catch the error if the connection to the db fails
        if ($mysqli->connect_errno) {
            printf("Connect failed %s\n", $mysqli->connect_error);
            exit();
        }

        // Make available the db connection through $mysqli
        $this->connection = $mysqli;
    }

    public function callDb($query)
    {
        $mysqli = $this->connection;
        $result = $mysqli->query($query);
        return $result;
    }
}
