<?php
require_once('../../private/initialize.php');
$page_title = "Order Successful";
include(SHARED_PATH . '/public_header.php');
// 
if (is_post_request()) {
    $product_id = $_POST["product_id"];
    $select_product = "SELECT product_name, product_price FROM products WHERE product_id='" . $product_id . "'";
    $res = mysqli_query($db, $select_product);
    while ($product = mysqli_fetch_assoc($res)) {
        $product_price = $product["product_price"];
        $product_name = $product["product_name"];
    }
    $color = $_POST["color"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $zip = $_POST["city"];
    //
    // Insert User to db
    $insert_user = "INSERT INTO users (first_name, last_name,address,country,city,zip,mobile,email) VALUES ('$first_name','$last_name','$address','$country','$city','$zip','$mobile','$email')";
    $insert_res = mysqli_query($db, $insert_user);
    $user_id = mysqli_insert_id($db);
    // 
    $sql = "INSERT INTO orders(product_id,user_id,product_quantity,product_color,product_size,product_price) VALUES ('$product_id', '$user_id','$quantity','$color','$size','$product_price')";
    $insert_order = mysqli_query($db, $sql);
}
?>
<div class="container">
    <div class="order__summary">
        <h1>Order Sucessfully Placed</h1>
        <table border="1">
            <tr>
                <th>Product</th>
                <td><?php echo $product_name ?></td>
            </tr>
            <tr>
                <th>Size</th>
                <td><?php echo $size ?></td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td><?php echo $quantity ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address ?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo $country ?></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><?php echo $mobile ?></td>
            </tr>
        </table>
    </div>
    <a class="goback__btn" href="../../public/">Go Back to Home</a>

</div>

<?php
include(SHARED_PATH . '/public_footer.php');
