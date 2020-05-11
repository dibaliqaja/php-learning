<?php

function connectToDB()
{
    $servername = "localhost";
    $username   = "root";
    $password   = "password";
    $database   = "mytodo";

    try {
        return new PDO("mysql:host=$servername; dbname=$database", $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function fetchAllTasks($pdo)
{
    $statement  = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
