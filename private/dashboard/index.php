<?php
require_once('../../private/initialize.php');
$page_title = "Dashboard";
include(SHARED_PATH . '/admin_header.php');

//  recent orders
$recent_orders_sql = "SELECT o.order_id, u.first_name, u.last_name, u.address, p.product_name
FROM orders o
JOIN products p ON o.product_id = p.product_id
JOIN users u ON o.user_id = u.user_id";
$recent_orders_res = mysqli_query($db, $recent_orders_sql);

// recent products
$recent_product_sql = "SELECT * FROM products LIMIT 5";
$recent_product_res = mysqli_query($db, $recent_product_sql);

// recent products
$recent_user_sql = "SELECT * FROM users LIMIT 5";
$recent_user_res = mysqli_query($db, $recent_user_sql);

?>
<div class="container">
    <div class="dashboard__summary__container">
        <fieldset>
            <legend>
                <h1>Recent Orders</h1>
            </legend>
            <table border="1">
                <tr>
                    <th>Order ID</th>
                    <th>Ordered Product</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                </tr>
                <?php while ($recent_order = mysqli_fetch_assoc($recent_orders_res)) { ?>
                    <tr>
                        <td><?php echo $recent_order["order_id"] ?></td>
                        <td><?php echo $recent_order["product_name"] ?></td>
                        <td><?php echo $recent_order["first_name"] . " " . $recent_order["last_name"] ?></td>
                        <td><?php echo $recent_order["address"] ?></td>
                    </tr>
                <?php } ?>

            </table>
            <a href="./manage_order.php" class="view__all">View All</a>
        </fieldset>
        <fieldset>
            <legend>
                <h1>Recent Added Products</h1>
            </legend>
            <table border="1">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Stock</th>
                </tr>
                <?php while ($recent_product = mysqli_fetch_assoc($recent_product_res)) { ?>
                    <tr>
                        <td><?php echo $recent_product["product_id"]; ?></td>
                        <td><?php echo $recent_product["product_name"]; ?></td>
                        <td><?php echo $recent_product["product_quantity"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./manage_products.php" class="view__all">View All</a>
        </fieldset>
        <fieldset>
            <legend>
                <h1>Users</h1>
            </legend>
            <table border="1">
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
                <?php while ($recent_user = mysqli_fetch_assoc($recent_user_res)) { ?>
                    <tr>
                        <td><?php echo $recent_user['user_id'] ?></td>
                        <td><?php echo $recent_user['first_name'] . " " . $recent_user["last_name"] ?></td>
                        <td>johndoe@example.com</td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./manage_users.php" class="view__all">View All</a>
        </fieldset>
    </div>
</div>


<?php
include(SHARED_PATH . '/admin_footer.php');
?>