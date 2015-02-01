<?php
$host = 'localhost';
$dbname = 'poo_blog';
$user = 'root';
$password = 'root';

$dsn = 'mysql:dbname=' . $dbname . ';host=' . $host;


$pdo = new PDO( $dsn, $user, $password );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $pdo->query('SELECT * FROM articles');
$datas = $res->fetchAll(PDO::FETCH_OBJ);

var_dump($datas);


