<?php

set_include_path(dirname(__FILE__));

class db
{
    public static function query() 
    {
        $mysql = new mysqli('localhost', 'zjwdb_517154', '****', 'zjwdb_517154');

        if ($mysql -> connect_errno) 
        {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        echo $mysqli->host_info . "\n";
    }
}