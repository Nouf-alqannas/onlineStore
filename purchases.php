<?php
    include 'inc/templete/header.php';

    $products = GetProductOfPurchases( $_SESSION["userid_normal"] );

?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <table id="product-table">
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>All Price</th>
                <th> Paying_off</th>
                <th>number_shear </th>
            </tr>
            <?php $all_price = 0;$cun=0;
                foreach(  $products as   $product){
                    $all_price +=$product['total_price'];
            ?>
            <tr>
                <td><?php echo $cun++; ?></td>
                <td><img src="img/<?php echo $product['img_path']; ?>" alt="pineapple" style="    width: 100px;height: 100px;" ></td>
                <td><?php echo  $product['name']; ?></td>
                <td><?php echo  $product['Price']; ?></td>
                <td><?php echo  $product['qty_requst']; ?></td>
                <td><?php echo $product['total_price'] ; ?></td>
                <th><?php echo  $product['Paying_off']; ?></th>
                <th> <?php echo  $product['number_shear']; ?></th>
            </tr>
            <?php } ?>
        </table>
            </div>

            <div class="col-sm-4">
                <h1>Total Price <span style="margin-left: 10%;color: red;"><?php echo  $all_price; ?> SAR</span></h1>
            </div>
        </div>

    </div>

</body>

</html>


