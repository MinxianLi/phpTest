<?php
$servername = "localhost";
$username = "root";
$password = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB",
    $username, $password);
    // Set the PDO erro mode to exception
    $conn-> setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    echo "Connected successfullly";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>
