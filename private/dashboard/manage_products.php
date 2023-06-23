<?php
require_once('../../private/initialize.php');
$page_title = "Manage Products";
include(SHARED_PATH . '/admin_header.php');
$sql = "SELECT product_id,product_name,product_category,product_quantity FROM products";
$res = mysqli_query($db, $sql);
?>
<div class="container">
    <fieldset>
        <legend>
            <h1>Listed Products</h1>
        </legend>
        <a href="./new_product.php" class="add__product">Add Product</a>
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Stock</th>
                <th colspan="3">Actions</th>
            </tr>
            <?php while ($product = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $product['product_id']; ?></td>
                    <td><img class="product__thumbnail" src="../../public/images/products/product-img-1.jpg" alt=""></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['product_category']; ?></td>
                    <td><?php echo $product['product_quantity']; ?></td>
                    <td><a href="#" class="view__action">View</a></td>
                    <td><a href="#" class="edit__action">Edit</a></td>
                    <td><a href="#" class="delete__action">Delete</a></td>
                </tr>
            <?php } ?>

        </table>
    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>