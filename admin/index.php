
<?php
include 'inc/templete/header.php';
?>

    <div class="container">
        <h2 class="text-center">All Products</h2>
        <div class="" style="display: flex;    justify-content: space-between;">
            <a href="add_product.php" class="btn btn-success" style="margin-bottom: 12px;">Add New Product</a>
            <form method="post" action="./" style="margin-top:0px;">
                <input class="form-control" type="text" name="search" style="width: 65%;    display: unset;">
                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
        <table id="product-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>Categore</th>
                <th>Action</th>
            </tr>

            <?php
            if(isset($_POST['search'])){

                $search =$_POST['search'];
                $statement = $con->prepare("SELECT product.*,categories.* FROM product INNER JOIN categories ON product.Catogry_id=categories.id_cat WHERE (`name` LIKE ?)");
                $statement->execute(array('%' . $search . '%' ));
                $productss =  $statement->fetchAll();

                $co =1;
                foreach ($productss  as $product){
                ?>
                <tr>
                    <td><?php echo  $co++; ?></td>
                    <td><?php echo  $product['name']; ?></td>
                    <td><?php echo  $product['Price']; ?></td>
                    <td><?php echo  $product['qty']; ?></td>
                    <td><?php echo  $product['name_cats']; ?></td>
                    <td>
                    <a href="edit_product.php?page=update&&id=<?php echo $product['ID_Item']; ?>" class="btn btn-success"> Edit</a>
                    <a href="inc/update_product.php?page=delet&&id=<?php echo $product['ID_Item']; ?>" class="btn btn-danger">  Delete</a>
                    </td>
                </tr>
                <?php }

            }else{

            $co =1;
            foreach ($products  as $product){
            ?>
            <tr>
                <td><?php echo  $co++; ?></td>
                <td><?php echo  $product['name']; ?></td>
                <td><?php echo  $product['Price']; ?></td>
                <td><?php echo  $product['qty']; ?></td>
                <td><?php echo  $product['name_cats']; ?></td>
                <td>
                <a href="edit_product.php?page=update&&id=<?php echo $product['ID_Item']; ?>" class="btn btn-success"> Edit</a>
                <a href="inc/update_product.php?page=delet&&id=<?php echo $product['ID_Item']; ?>" class="btn btn-danger">  Delete</a>
                </td>
            </tr>
            <?php }

            }

            ?>
        </table>


    </div>

    <!--footer-->
    <footer class="text-center text-black py-3 fixed-bottom" style="background-color: #508f07;">
        © 2024 Copyright: Cilantro Store
        <img src="../img/Cilntro_LOGO.png" width="3%">
    </footer>
    <!--footer-->
    </div>

</body>
</html>
