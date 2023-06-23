<?php
require_once('../../private/initialize.php');
$page_title = "Update Product";
include(SHARED_PATH . '/admin_header.php');
?>
<div class="container">
    <fieldset>
        <legend>
            <h1>Update [Product Name]</h1>
        </legend>
        <form action="">
            <div class="form__group">
                <label for="product-image">Product Image</label>
                <input type="file" name="" id="product-image">
            </div>
            <div class="form__group">
                <label for="product-name">Product Name</label>
                <input type="text" name="" id="product-name">
            </div>
            <div class="form__group">
                <label for="product-category">Product Category</label>
                <input type="text" name="" id="product-category">
            </div>
            <div class="form__group">
                <label for="product-quantity">Product Quantity</label>
                <input type="number" name="" id="product-quantity">
            </div>
            <div class="form__group">
                <label for="size">Size</label>
                <input type="text" name="" id="size">
            </div>
            <div class="form__group">
                <input type="submit" id="add__product__btn" value="Update Product">
            </div>
        </form>

    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>