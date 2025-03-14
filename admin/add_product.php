<?php
 include 'inc/templete/header.php';

$cats = GetItem( 'categories');

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card list-group">
                <div class="card-header list-group-item disabled">Add Procust</div>
                <div class="card-body list-group-item">
                    <form method="POST" action="inc/add_product.php" enctype="multipart/form-data">

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Name</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="name" type="text" class="form-control " name="Name" value="" required >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Price</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="number" type="number" class="form-control " name="Price" required  >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Description</label>
                                <div class="col-sm-10 col-md-8">
                                    <textarea class="form-control" name="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Categore</label>
                                <div class="col-sm-10 col-md-8">
                                    <select name=category class="form-control">
                                        <?php
                                        foreach($cats as $cat){
                                        ?>
                                        <option value="<?php echo $cat['id_cat'] ?>"><?php echo $cat['name_cats'] ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Qty </label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="number" type="number" class="form-control " name="qty" required  >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-3 control-label" style="line-height: 3;"> Img Prodection</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="file" class="form-control" name="img_product">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    ADD
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../layout/js/jquery-3.5.1.min.js"></script>
<script src="../layout/js/bootstrap.js"></script>
</body>
</html>
