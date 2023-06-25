<?php
require_once('../../private/initialize.php');
$page_title = "Check out";
include(SHARED_PATH . '/public_header.php');
// 
$product_id = htmlspecialchars($_GET['product_id']);
// echo $id;
$sql = "SELECT * FROM products WHERE product_id = '" . $product_id . "'";
$res = mysqli_query($db, $sql);
if (is_post_request()) {
    $color = $_POST["color"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];
}
?>
<div class="container">
    <fieldset class="review__item">
        <legend>
            <h1>Review Item and Shipping</h1>
        </legend>
        <div class="review__item__details">
            <div class="review__item__left">
                <figure>
                    <img src="../images/products/product-img-1.jpg" alt="">
                </figure>
                <div class="">
                    <?php while ($product_detail = mysqli_fetch_assoc($res)) { ?>
                        <h3><?php echo htmlspecialchars($product_detail["product_name"]) ?></h3>

                        <p>Color: <?php echo $color ?></p>
                </div>
            </div>
            <div class="review__item__right">
                <p>$<?php echo htmlspecialchars($product_detail["product_price"]); ?></p>
            <?php } ?>
            <p>Quantity: <?php echo $quantity ?></p>
            </div>
        </div>
    </fieldset>
    <fieldset class="delivery__information">
        <legend>
            <h2>Delivery Information</h2>
        </legend>
        <form action="./order.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
            <input type="hidden" name="color" value="<?php echo htmlspecialchars($color); ?>">
            <input type="hidden" name="size" value="<?php echo htmlspecialchars($size); ?>">
            <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>">
            <div class="delivery__information__form">
                <div class="form__group">
                    <label for="first-name" class="delivery__information__label">First Name</label>
                    <input type="text" name="first-name" id="first-name">
                </div>
                <div class="form__group">
                    <label for="last-name" class="delivery__information__label">Last Name</label>
                    <input type="text" name="last-name" id="last-name">
                </div>
                <div class="form__group">
                    <label for="address" class="delivery__information__label">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="form__group">
                    <label for="country" class="delivery__information__label">Country</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="form__group">
                    <label for="city" class="delivery__information__label">City</label>
                    <input type="text" name="city" id="city">
                </div>
                <div class="form__group">
                    <label for="zip" class="delivery__information__label">Zip</label>
                    <input type="number" name="zip" id="zip">
                </div>
                <div class="form__group">
                    <label for="mobile" class="delivery__information__label">Mobile</label>
                    <input type="number" name="mobile" id="mobile">
                </div>
                <div class="form__group">
                    <label for="email" class="delivery__information__label">Email</label>
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <fieldset class="card__information">
                <legend>
                    <h3>Card Information</h3>
                </legend>
                <p>The Card Information will not stored in Database. This is just place holder</p>
                <div class="card__information__form">
                    <div class="form__group">
                        <label for="card-holder-name" class="delivery__information__label">Card Holder Name</label>
                        <input type="text" name="" id="card-holder-name">
                    </div>
                    <div class="form__group">
                        <label for="card-number" class="delivery__information__label">Credit Card Number</label>
                        <input type="number" name="" id="card-number">
                    </div>
                    <div class="form__group">
                        <label for="card-expiry-date" class="delivery__information__label">Card Expiry Date</label>
                        <input type="text" name="" id="card-expiry-date">
                    </div>
                    <div class="form__group">
                        <label for="cvc" class="delivery__information__label">CVC</label>
                        <input type="text" name="" id="cvc">
                    </div>
                </div>
            </fieldset>
            <input type="submit" class="place__order__btn" value="Place Order">
            <!-- <button type="submit" class="place__order__btn"><a href="#">Place Order</a></button> -->

        </form>
    </fieldset>
</div>


<?php
include(SHARED_PATH . '/public_footer.php');
