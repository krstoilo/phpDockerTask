<?php

$host = 'localhost';
$username = 'user1@localhost';
$password = 'pass1';
$database = 'names';

try
{
    $connect = new PDO("mysql:host=$host;dbname=$database",$username,$password);
    $connect ->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    
    $var = $_GET['id'];
    echo 'Hello ';
    $stmt = $connect->query("SELECT name FROM names where id='$var'");
    $row = $stmt->fetch();
    echo $row['name'];
    
}
catch(PDOException $error)
{
    $error->getMessage();
}
?>