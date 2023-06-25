<?php
require_once('../../private/initialize.php');
$page_title = "Dashboard";
include(SHARED_PATH . '/admin_header.php');

// Select Orders
$select_orders = "SELECT * FROM orders";
$orders = mysqli_query($db, $select_orders);
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
                    <th>Order Status</th>
                </tr>
                <tr>
                    <?php while ($order = mysqli_fetch_assoc($orders)) { ?>
                        <td><?php echo $order["order_id"] ?></td>
                        <?php
                            // select ordered product and customer name
                        ?>
                        <td>T Shirt</td>
                        <td>John Doe</td>
                        <td>Kings Landing</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="order-status" id="">
                            </form>
                        </td>
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
                <tr>
                    <td>2001</td>
                    <td>T Shirt</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>2001</td>
                    <td>T Shirt</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>2001</td>
                    <td>T Shirt</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>2001</td>
                    <td>T Shirt</td>
                    <td>34</td>
                </tr>
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
                <tr>
                    <td>3001</td>
                    <td>John doe</td>
                    <td>johndoe@example.com</td>
                </tr>
                <tr>
                    <td>3001</td>
                    <td>John doe</td>
                    <td>johndoe@example.com</td>
                </tr>
                <tr>
                    <td>3001</td>
                    <td>John doe</td>
                    <td>johndoe@example.com</td>
                </tr>


            </table>
            <a href="#" class="view__all">View All</a>
        </fieldset>
    </div>
</div>


<?php
include(SHARED_PATH . '/admin_footer.php');
?>