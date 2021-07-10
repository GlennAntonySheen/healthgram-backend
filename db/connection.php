<?php

    $dbhost = 'localhost';
    $dbport = '3306';
    $dbname = 'HEALTHGRAM';
    $username = 'root';
    $password='';

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};";

    $pdo = new PDO($dsn,$username,$password);


?>