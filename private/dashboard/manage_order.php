<?php
require_once('../../private/initialize.php');
$page_title = "Manage Orders";
include(SHARED_PATH . '/admin_header.php');
$recent_orders_sql = "SELECT o.order_id, u.first_name, u.last_name, u.address, p.product_name
FROM orders o
JOIN products p ON o.product_id = p.product_id
JOIN users u ON o.user_id = u.user_id";
$recent_orders_res = mysqli_query($db, $recent_orders_sql);
?>
<div class="container">
    <fieldset>
        <legend>
            <h1>Recent Orders</h1>
        </legend>
        <table border="1">
            <tr>
                <th>Order ID</th>
                <th>Ordered Product</th>
                <th>Customer Name</th>
                <th>Customer Location</th>
            </tr>
            <?php while ($recent_order = mysqli_fetch_assoc($recent_orders_res)) { ?>
                <tr>
                    <td><?php echo $recent_order["order_id"]; ?></td>
                    <td><?php echo $recent_order["product_name"]; ?></td>
                    <td><?php echo $recent_order["first_name"] . " " . $recent_order["last_name"]; ?></td>
                    <td>
                        <?php echo $recent_order["address"]; ?>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>