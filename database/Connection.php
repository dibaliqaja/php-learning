<?php

class Connection
{
    public static function make()
    {
        $hostname   = "localhost";
        $username   = "root";
        $password   = "password";
        $database   = "mytodo";

        try {
            return new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
