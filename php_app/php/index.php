<?php

$host = 'db';
$user = 'user1@localhost';
$password = 'pass1';
$db = 'names';

try
{
    $connect = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $connect ->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    
    echo 'Success!';
    
}
catch(PDOException $error)
{
    $error->getMessage();
}

?>