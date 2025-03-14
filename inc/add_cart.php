<?php
    session_start();
    include '../conect.php';
    include "../inc/function/function.php";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $id_pro =$_POST['id_pro'];
        $id_user = $_SESSION["userid_normal"];
        $qty = $_POST['qty'];
        $isset =CheckItem2( 'cart' , 'id_pro' , $id_pro,'id_user' , $id_user);

        if($isset > 0){
            echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" > المنتج موجود بالسله من سابق </div>';
            ?>
            <script>
            setTimeout(function(){
                location.href='../cart.php';
            },2000);
            </script>
            <?php

        }else{
            $stmt = $con->prepare("INSERT INTO `cart` (`id_pro`,count_pro,`id_user`)
            VALUES ( :id,:c,:us)");

            $stmt->execute(array(
            'id' => $id_pro,
            'c'  => $qty,
            'us' => $id_user,
            ));
                echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;">تمت الاضافه بنجاح</div>';
            ?>
            <script>
            setTimeout(function(){
                location.href='../cart.php';
            },2000);
            </script>
            <?php
        }




    }

    if(isset($_GET['page']) && $_GET['page']='delet' &&  isset($_GET['id'])){

        $isset =CheckItem('cart','id_cart',$_GET['id']);
        if($isset == 0){ header("location:../cart.php");}else{

            $stmt =$con->prepare("DELETE FROM cart WHERE id_cart=?");
            $stmt->execute(array($_GET['id']));
            $count = $stmt->rowCount();
            echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >تم الحذف  بنجاح</div>';
            ?>
            <script>
                setTimeout(function(){
                    location.href='../cart.php';
                },4000);
            </script>
            <?php

        }

    }


?>
