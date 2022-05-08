<?php
    $dsn = 'mysql:host=localhost;dbname=accounts';
    $username = 'root';
    $password = 'root';

    try {
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e){
        $error_message = $e->getMessage();
        include('errors/error.php');
        exit();
    }
?>