<?php
require_once('../../private/initialize.php');
$page_title = "Manage Orders";
include(SHARED_PATH . '/admin_header.php');
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
                <th>Order Status</th>
            </tr>
            <tr>
                <td>2001</td>
                <td>T Shirt</td>
                <td>John Doe</td>
                <td>
                    <form action="">
                        <input type="checkbox" name="" id="">
                    </form>

                </td>
            </tr>

        </table>
    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>