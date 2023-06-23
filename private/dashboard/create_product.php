<?php
require_once('../../private/initialize.php');
if (is_post_request()) {
    // $product_image = $_POST["product-image"];
    $product_name = $_POST["product-name"];
    $product_description = $_POST["product-description"];
    $product_category = $_POST["product-category"];
    $product_quantity = $_POST["product-quantity"];
    $product_size = $_POST["size"];
    $product_color = $_POST["product-color"];
    $product_price = $_POST["product-price"];
    $sql = "INSERT INTO products(product_name,product_description,product_category,product_price,product_quantity,product_color,product_size) VALUES('$product_name','$product_description','$product_category','$product_price','$product_quantity','$product_color','$product_size')";
    $res = mysqli_query($db, $sql);
    if ($res) {
        redirect_to('../../private/dashboard/manage_products.php');
    } else {
        echo mysqli_error($db);
    }
}
