<?php
namespace SmartBear;

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $database = 'smart_bear';

    public function __construct()
    {
        $mysqli = new \mysqli($this->host, $this->user, $this->password, $this->database);

        if ($mysqli->connect_errno) {
            printf("Connect failed %s\n", $mysqli->connect_error);
            exit();
        }

        return $mysqli;
    }
}
