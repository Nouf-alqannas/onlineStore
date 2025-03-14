<?php
    session_start();
    include '../../conect.php';
    include '../../inc/function/function.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $Erros = array();
        $id_product = $_POST['id_product'];
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

        if($img_size_file >0 ){
            $avatarexplode = explode('.',$img_name_file);
            $avatarExtension =strtolower(end($avatarexplode));

            $emtidad = pathinfo($_FILES['img_product']['name'],PATHINFO_EXTENSION);
            $avatar = uniqid() . '.' . $emtidad;

            move_uploaded_file( $img_tmp_file , "..\..\img\\" . $avatar );
        }else{

            $ss = GetItemWhere( 'product' , 'ID_Item' , $id_product);
            $avatar =$ss['img_path'];
        }

        $stmt = $con->prepare("UPDATE product SET `name` = ? ,Price=?,qty=?,img_path=?,`Description`=?,Catogry_id=? WHERE ID_Item = ? ");
        $stmt->execute(array( $Name ,$Price ,$qty ,$avatar ,$Description , $category ,$id_product  ));
        $count = $stmt->rowCount();
            echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >تم التعديل  بنجاح</div>';
            ?>
            <script>
                setTimeout(function(){
                    location.href='../index.php';
                },2000);
            </script>
            <?php

}
elseif(isset($_GET['page']) && $_GET['page']=='delet'){
    if(isset($_GET['id'])){
        $isset =CheckItem('product','ID_Item',$_GET['id']);
        if($isset == 0){ header("location:index.php");}else{

            $stmt =$con->prepare("DELETE FROM product WHERE ID_Item=?");
            $stmt->execute(array($_GET['id']));
            $count = $stmt->rowCount();
            echo '<div class="alert alert-success text-center" style="text-align: center;background: beige;font-size: 22px;font-weight: bold;" >تم الحذف  بنجاح</div>';
            ?>
            <script>
                setTimeout(function(){
                    location.href='../index.php';
                },2000);
            </script>
            <?php

        }
    }

}

?>
