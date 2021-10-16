<?php

$host = 'db';
$user = 'user1@localhost';
$password = 'pass1';
$db = 'names';

try
{
    $connect = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $connect ->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    
    echo 'Hello ';
    $var = $_GET['id'];
    $stmt = $connect->query("SELECT name FROM names where id='$var'");
    $row = $stmt->fetch();
    echo $row['name'];
    
}
catch(PDOException $error)
{
    $error->getMessage();
}

?>