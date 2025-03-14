<?php
    include 'inc/templete/header.php';

    $cats =GetItem('categories');
    $products = GetProductAndCats();
?>

    <!--==categories-->
    <section id="category">

        <!--heading---->
        <div class="category-heading">
            <h2>Categories</h2>
            <span>All</span>
        </div>


        <!--box-container---------->
        <div class="category-container">
            <?php
            foreach( $cats as  $cat){
            ?>
            <!--box------->
            <a href="show_products_cats.php?id=<?php echo $cat['id_cat']; ?>" class="category-box">
                <img src="layout/imgs/<?php echo $cat['img_cat']; ?>" alt="Fish">
                <span><?php echo $cat['name_cats']; ?></span>
            </a>
            <?php }?>
        </div>
    </section>
    <!--categorie end-->

    <!--Products-->
    <section id="popular-product">

        <!--heading------->
        <div class="product-heading">
            <h3>Popular Products</h3>
            <span>All</span>
        </div>


        <!--box-container----->
        <div class="product-container">

        <?php foreach($products as $product){ ?>
            <!--box------->
            <div class="product-box text-center">
                <img src="img/<?php echo $product['img_path']; ?>" alt="pineapple">
                <strong> <?php echo $product['name']; ?> </strong>
                <span class="quantity"> Available:<?php echo $product['qty']; ?> </span>
                <span class="price"> <?php echo $product['Price']; ?> SAR</span>
                <!--cart-btn------->
                <div style="display: grid;    grid-gap: 10px;">
                    <a href="show_prodect.php?id=<?php echo $product['ID_Item']; ?>"  class="cart-btn" style="grid-column: 1;">
                        <i class="fas fa-shopping-bag"></i> Add Cart
                    </a>
                    <!--like-btn------->
                    <a href="show_prodect.php?id=<?php echo $product['ID_Item']; ?>" class="cart-btn" style="grid-column: 2;">
                        Read More
                    </a>
                </div>
            </div>
            <?php }?>
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


