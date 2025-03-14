<?php
    include 'inc/templete/header.php';
    $products = GetProductOfCartWhere( $_SESSION["userid_normal"] );
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
                <th>Action</th>
            </tr>
            <?php $all_price = 0;$cun=0;
                foreach(  $products as   $product){
                    $all_price += $product['count_pro'] * $product['Price'];
            ?>
            <tr>
                <td><?php echo $cun++; ?></td>
                <td><img src="img/<?php echo $product['img_path']; ?>" alt="pineapple" style="    width: 100px;height: 100px;" ></td>
                <td><?php echo  $product['name']; ?></td>
                <td><?php echo  $product['Price']; ?></td>
                <td><?php echo  $product['count_pro']; ?></td>
                <td><?php echo $product['count_pro'] * $product['Price'] ; ?></td>
                <td>
                <a href="inc/add_cart.php?page=delet&id=<?php echo $product['id_cart']; ?>" class="btn btn-danger">  Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
            </div>

            <div class="col-sm-4">
                <h1>Total Price <span style="margin-left: 10%;color: red;"><?php echo $all_price; ?> SAR</span></h1>
                <a  class="btn btn-primary btn-block" href="checkouts.php?page=cart">Buy</a>
                <a class="btn btn-primary btn-block" href="index.php"> Back to Shop</a>
            </div>
        </div>

    </div>

</body>

</html>


