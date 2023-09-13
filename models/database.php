<?php
$username = 'root';
$host = 'localhost';
$password = '';
$dsn = 'mysql:host=localhost;dbname=student_app;charset=utf8';

try
{
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("La connexion a échoué : ".$e->getMessage());
    exit();
}

?>