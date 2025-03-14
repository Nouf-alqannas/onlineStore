<?php


function GetProductOfPurchases($value)
{
    global $con;
    $statement = $con->prepare("SELECT requst.*,product.* FROM requst INNER JOIN product ON requst.id_product=product.ID_Item WHERE requst.id_user=$value");
    $statement->execute(array());
    $count =  $statement->fetchAll();
    return $count;
}

function GetProductOfCartWhere(  $value)
{
    global $con;
    $statement = $con->prepare("SELECT cart.*,product.* FROM cart INNER JOIN product ON cart.id_pro=product.ID_Item WHERE cart.id_user = $value ");
    $statement->execute(array());
    $count =  $statement->fetchAll();
    return $count;
}

function GetProductsAndCatsWhere($where ,$value)
{
    global $con;
    $statement = $con->prepare("SELECT product.*,categories.* FROM product INNER JOIN categories ON product.Catogry_id=categories.id_cat WHERE $where  = ?  ");
    $statement->execute(array($value));
    $count =  $statement->fetchAll();
    return $count;
}

function GetProductAndCatsWhere($where ,$value)
{
    global $con;
    $statement = $con->prepare("SELECT product.*,categories.* FROM product INNER JOIN categories ON product.Catogry_id=categories.id_cat WHERE $where  = ?  ");
    $statement->execute(array($value));
    $count =  $statement->fetch();
    return $count;
}

function GetProductAndCats()
{
    global $con;

    $statement = $con->prepare("SELECT product.*,categories.* FROM product INNER JOIN categories ON product.Catogry_id=categories.id_cat");

    $statement->execute(array());
    $count =  $statement->fetchAll();

    return $count;
}



function GetItemAll($from , $where , $value)
{
    global $con;

    $statement = $con->prepare("SELECT * FROM  $from WHERE $where  = ? ");

    $statement->execute(array($value));

    $count =  $statement->fetchAll();

    return $count;
}



function GetItemWhere( $table , $where , $val)
{
    global $con;

    $statement = $con->prepare("SELECT * FROM  $table WHERE $where =? ");

    $statement->execute(array($val));

    $rows =  $statement->fetch();

    return $rows;
}



function GetItem($table)
{
    global $con;

    $statement = $con->prepare("SELECT * FROM  $table ");

    $statement->execute(array());

    $rows =  $statement->fetchAll();

    return $rows;
}


function CheckItem( $from , $where , $value)
{
    global $con;

    $statement = $con->prepare("SELECT * FROM  $from WHERE $where  = ? ");

    $statement->execute(array($value));

    $count =  $statement->rowCount();

    return $count;
}


function CheckItem2( $from , $where , $value,$where2 , $value2)
{
    global $con;

    $statement = $con->prepare("SELECT * FROM  $from WHERE $where  = ? AND  $where2 =?");

    $statement->execute(array($value,$value2));

    $count =  $statement->rowCount();

    return $count;
}

