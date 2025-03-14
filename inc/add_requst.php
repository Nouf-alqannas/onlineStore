<?php
    session_start();
    include '../conect.php';
    include "../inc/function/function.php";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $id_user = $_SESSION["userid_normal"];


        if(isset($_POST['id_pro_of_one'])){

            $isset =GetItemWhere('product','ID_Item',$_POST['id_pro_of_one']);
            $id_pro = $isset['ID_Item'];
            $price = $isset['Price'];

            $number_shear = $_POST['number_shear'];
            $Paying_off = $_POST['Paying_off'];

            $qty_chosses=$_POST['qty_chosses'];
            $total_price = $qty_chosses * $price;
                //

            $qty_old =GetItemWhere('product','ID_Item',$id_pro);
            if($qty_old['qty'] > $qty_chosses )
            {
                $new_qty = $qty_old['qty'] -$qty_chosses;
                $stmt = $con->prepare("UPDATE product SET `qty` =? WHERE ID_Item = ? ");
                $stmt->execute(array( $new_qty ,$id_pro  ));
                $count = $stmt->rowCount();

                //

                $stmt = $con->prepare("INSERT INTO `requst` (`id_user`, id_product , `price`, qty_requst , total_price , number_shear , Paying_off)
                VALUES ( :id,:ip,:pr,:qtty,:tot,:nsh,:pay)");

                $stmt->execute(array(
                'id' => $id_user,
                'ip'  => $id_pro,
                'pr' => $price,
                'qtty' => $qty_chosses,
                'tot'  => $total_price,
                'nsh' => $number_shear,
                'pay' => $Paying_off,
                ));
                    echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;">تمت الاضافه بنجاح</div>';
                ?>
                <script>
                setTimeout(function(){
                    location.href='../confirmation.php';
                },2000);
                </script>
                <?php
            }else{
                echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;">لم يعد هناك كمه كافيه من المنتج</div>';
                ?>
                <script>
                setTimeout(function(){
                    location.href='../confirmation.php';
                },2000);
                </script>
                <?php
            }
        }elseif(isset($_POST['id_pros_of_cart'])){

            $products = GetProductOfCartWhere( $_SESSION["userid_normal"] );

            foreach($products as $product){

                $id_pro = $product['ID_Item'];
                $qty = $product['count_pro'];
                $price = $product['Price'];
                $total_price = $qty * $price;
                $number_shear = $_POST['number_shear'];
                $Paying_off = $_POST['Paying_off'];
                //
                $qty_old =GetItemWhere('product','ID_Item',$id_pro);
                if($qty_old['qty'] > $qty )
                {
                    $new_qty = $qty_old['qty'] - $qty;
                    $stmt = $con->prepare("UPDATE product SET `qty` =? WHERE ID_Item = ? ");
                    $stmt->execute(array( $new_qty ,$id_pro  ));
                    $count = $stmt->rowCount();

                    //


                    $stmt = $con->prepare("INSERT INTO `requst` (`id_user`, id_product , `price`, qty_requst , total_price , number_shear , Paying_off)
                    VALUES ( :id,:ip,:pr,:qtty,:tot,:nsh,:pay)");

                    $stmt->execute(array(
                    'id' => $id_user,
                    'ip'  => $id_pro,
                    'pr' => $price,
                    'qtty' => $qty,
                    'tot'  => $total_price,
                    'nsh' => $number_shear,
                    'pay' => $Paying_off,
                    ));
                        echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >تمت الاضافه بنجاح</div>';
                    ?>
                    <script>
                    setTimeout(function(){
                        location.href='../confirmation.php';
                    },2000);
                    </script>
                    <?php

                }else{
                    echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >لم يعد هناك كمه كافيه من المنتج</div>';
                    ?>
                    <script>
                    setTimeout(function(){
                        location.href='../confirmation.php';
                    },2000);
                    </script>
                    <?php
                }
            }

        }






    }



?>
