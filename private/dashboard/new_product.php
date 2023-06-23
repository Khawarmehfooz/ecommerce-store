<?php
require_once('../../private/initialize.php');
$page_title = "Add Product";
include(SHARED_PATH . '/admin_header.php');

?>
<div class="container">
    <fieldset>
        <legend>
            <h1>Add New Product</h1>
        </legend>
        <form action="./create_product.php" method="post">
            <div class="form__group">
                <label for="product-image">Product Image</label>
                <input type="file" name="product-image" id="product-image">
            </div>
            <div class="form__group">
                <label for="product-name">Product Name</label>
                <input type="text" name="product-name" id="product-name">
            </div>
            <div class="form__group">
                <label for="product-description">Product Description</label>
                <input type="text" name="product-description" id="product-description">
            </div>
            <div class="form__group">
                <label for="product-category">Product Category</label>
                <input type="text" name="product-category" id="product-category">
            </div>
            <div class="form__group">
                <label for="product-quantity">Product Quantity</label>
                <input type="number" name="product-quantity" id="product-quantity">
            </div>
            <div class="form__group">
                <label for="size">Size</label>
                <input type="text" name="size" id="size">
            </div>
            <div class="form__group">
                <label for="product-color">Product Color</label>
                <input type="text" name="product-color" id="product-color">
            </div>
            <div class="form__group">
                <label for="product-price">Product Price</label>
                <input type="number" name="product-price" id="product-price">
            </div>
            <div class="form__group">
                <input type="submit" id="add__product__btn" value="Add Product">
            </div>
        </form>

    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>