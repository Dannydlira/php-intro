<?php

declare(strict_types=1);

$pdo = null;

try {
    // $hostname = "myhost";
    // $port = 3306;
    // $dbname = "exemplo";
    // $username = "root";
    // $pw = "12345";

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=exemplo', 'root', 'Helo20');
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

return $pdo;