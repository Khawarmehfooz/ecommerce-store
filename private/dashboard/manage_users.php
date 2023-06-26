<?php
require_once('../../private/initialize.php');
$page_title = "Manage Orders";
include(SHARED_PATH . '/admin_header.php');
$select_all_users = "SELECT * FROM users";
$select_all_users_res = mysqli_query($db, $select_all_users);
?>
<div class="container">
    <fieldset>
        <legend>
            <h1>Recent Orders</h1>
        </legend>
        <table border="1">
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            <?php while ($user = mysqli_fetch_assoc($select_all_users_res)) { ?>
                <tr>
                    <td><?php echo $user["user_id"]; ?></td>
                    <td><?php echo $user["first_name"] ?></td>
                    <td><?php echo $user["last_name"] ?></td>
                    <td><?php echo $user["country"]; ?></td>
                    <td><?php echo $user["city"] ?></td>
                    <td><?php echo $user["address"] ?></td>
                    <td><?php echo $user["mobile"] ?></td>
                    <td><?php echo $user["email"] ?></td>


                </tr>
            <?php } ?>

        </table>
    </fieldset>

</div>
<?php
include(SHARED_PATH . '/admin_footer.php');
?>