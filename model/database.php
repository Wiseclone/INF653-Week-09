<?php
    //server connection
    $dsn = 'mysql:host=lmag6s0zwmcswp5w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=xikde0uyh7pbeas5';
    $username = 'a5ftw1bxqvj9d78y';
    $password = 'scsk5kkjelcqin7h';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
