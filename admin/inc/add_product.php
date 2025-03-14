<?php
    session_start();
    include '../../conect.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $Erros = array();

        $Name=$_POST['Name'];
        $Price=$_POST['Price'];
        $Description=$_POST['Description'];
        $category=$_POST['category'];
        $qty=$_POST['qty'];

        $img_name_file  = $_FILES['img_product']['name'];
        $img_size_file  = $_FILES['img_product']['size'];
        $img_tmp_file   = $_FILES['img_product']['tmp_name'];
        $img_type_file  = $_FILES['img_product']['type'];

        $avatarAllExtension =array("jpeg" , "png" , "jpg" ,"gif");

        $avatarexplode = explode('.',$img_name_file);
        $avatarExtension =strtolower(end($avatarexplode));

        // $avatar =rand(1,10000000) . '_' . $img_name_file;

        $emtidad = pathinfo($_FILES['img_product']['name'],PATHINFO_EXTENSION);
        $avatar = uniqid() . '.' . $emtidad;

        move_uploaded_file( $img_tmp_file , "..\..\img\\" . $avatar );

                $stmt = $con->prepare("INSERT INTO `product` (`name`,Price,`qty`,`img_path` , `Description` , Catogry_id)
                                        VALUES ( :nam,:pr,:qt,:im , :descr , :ca )");

                    $stmt->execute(array(
                    'nam' => $Name,
                    'pr'  => $Price,
                    'qt' => $qty,
                    'im' => $avatar,
                    'descr' => $Description,
                    'ca' => $category,

                    ));
                    echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;"  >تمت الاضافه بنجاح</div>';
                    ?>
                    <script>
                        setTimeout(function(){
                            location.href='../index.php';
                        },2000);
                    </script>
                    <?php

    }


?>
