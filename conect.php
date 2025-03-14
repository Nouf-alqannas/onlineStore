<?php

$dsn = "mysql:local =localhost; dbname=products";
$user ="root";
$pass = '';

$opration =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
);

try {

    $con =new PDO($dsn ,$user ,$pass,$opration);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    echo 'you cant to coonect of database' . $e->getMessage();
}

?>

