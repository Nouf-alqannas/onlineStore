<?php
    include 'inc/templete/header.php';

    if(isset($_GET['id'])){
        $isset =CheckItem('product','ID_Item',$_GET['id']);
        if($isset == 0){ header("location:index.php");
        }
        else{
            $product = GetProductAndCatsWhere('ID_Item' , $_GET['id']);
        }
    }else{
        header("location:index.php");
    }



?>

    <!--==categories-->
    <section id="category" style="    margin: 0px auto;">

    <!--Products-->
    <section id="popular-product"  style="    margin: 0px auto;" >
        <!--box-container----->
        <div class="product-container">

            <img src="img/<?php echo $product['img_path']; ?>" alt="pineapple" style="height: 300px;" >
            <div class="col-md-12">
                <h1><strong> <?php echo $product['name']; ?> </strong></h1>
                <div> <span class="price"> <?php echo $product['Price']; ?> SAR</span></div>
                <span class="quantity"> Available:<?php echo $product['qty']; ?> </span>
                <p style="    margin-top: 10px;"> <?php echo $product['Description']; ?></p>
            </div>
            <div>
                <form id="form_add_cart" method="POST" action="inc/add_cart.php" style="    margin-bottom: 10px;">
                <span>Enter QTY</span>
                    <input type="hidden" name="id_pro" value="<?php echo $_GET['id']; ?>" >
                    <input type="number" name="qty" palseholder="Enter QTY" required>
                </form>
                <button form="form_add_cart" type="submit" href="Checkout.php" class="btn btn-primary btn-block " style="    grid-column: 1;">
                        <i class="fas fa-shopping-bag"></i> Add Cart
                    </button>
            </div>

            <div>
            <!--like-btn------->
                <a href="checkouts.php?page=show_prodect&id=<?php echo  $_GET['id']; ?>" class="btn btn-primary btn-block" style="    grid-column: 2;">
                    Buy
                </a>

            </div>


        </div>

    </section>
    <!--popular-product-end--------------------->

    <!--footer-->
    <footer class="text-center text-black py-3 fixed-bottom" style="background-color: #508f07;">
        © 2024 Copyright: Cilantro Store
        <img src="img/Cilntro_LOGO.png" width="3%">
    </footer>
    <!--footer-->
</body>

</html>


