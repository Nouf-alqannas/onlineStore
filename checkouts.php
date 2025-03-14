<?php
    include 'inc/templete/header.php';
    if(isset($_GET['page']) && $_GET['page']=='cart'){
        $products = GetProductOfCartWhere( $_SESSION["userid_normal"] );

    }elseif( isset($_GET['page']) &&$_GET['page'] == 'show_prodect' && isset($_GET['id'])){

        $product = GetProductAndCatsWhere('ID_Item' , $_GET['id']);
    }

    $info_user = GetItemWhere( 'admin' , 'Admin_ID' , $_SESSION["userid_normal"] );

?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <table id="product-table">
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>All Price</th>
            </tr>
            <?php $all_price = 0;$cun=0;
                if(isset($_GET['page']) && $_GET['page']=='cart'){
            foreach(  $products as   $product){
                $all_price += $product['count_pro'] * $product['Price'];
            ?>
            <tr>
                <td><?php echo $cun++; ?></td>
                <td><img src="img/<?php echo $product['img_path']; ?>" alt="pineapple" style="    width: 100px;height: 100px;" ></td>
                <td><?php echo  $product['name']; ?></td>
                <td><?php echo  $product['Price']; ?></td>
                <td><?php echo $product['count_pro']; ?> </td>
                <td><?php echo $product['count_pro'] * $product['Price'] ; ?></td>
            </tr>
            <?php } }elseif(isset($_GET['page']) && $_GET['page']=='show_prodect' && $_GET['id']){ ?>

                <td><?php echo $cun++; ?></td>
                <td><img src="img/<?php echo $product['img_path']; ?>" alt="pineapple" style="    width: 100px;height: 100px;" ></td>
                <td><?php echo  $product['name']; ?></td>
                <td><?php echo  $product['Price']; ?></td>
                <td><input type="number" name="qty_chosses" value="1" form="form_add_requst"> </td>
                <td><?php echo $product['Price'] ; ?></td>
          <?php  }?>
        </table>
            </div>

            <div class="col-sm-6">
                <h1>Total Price <span style="margin-left: 10%;color: red;"><?php echo $product['Price']; ?> SAR</span></h1>
                <h1>Information Of User</h1>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card list-group">
                            <div class="card-body list-group-item">
                                <form method="POST" id="form_add_requst" action="inc/add_requst.php" enctype="multipart/form-data">
                                    <?php
                                    if(isset($_GET['id'])){
                                        echo "<input type='hidden' name='id_pro_of_one' value='" . $_GET['id'] ."'>";
                                    }else{

                                        echo "<input type='hidden' name='id_pros_of_cart' value=''>";
                                    }
                                    ?>
                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Name</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="text" class="form-control " name="Name" value="<?php echo $info_user['Name']; ?>" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Email</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="text" class="form-control " name="Name" value="<?php echo $info_user['Email']; ?>" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Phoon</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="number" class="form-control " name="Phoon" value="<?php echo $info_user['Phone_Num']; ?>" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Address</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="text" class="form-control " name="Address" value="<?php echo $info_user['Address']; ?>" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Paying off</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="text" class="form-control " name="Paying_off" value="" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <div class="row">
                                            <label class="col-md-2 control-label" style="line-height: 3;"> Number Share</label>
                                            <div class="col-sm-10 col-md-8">
                                                <input id="name" type="number" class="form-control " name="number_shear" value="" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block">
                                            Buy
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>


