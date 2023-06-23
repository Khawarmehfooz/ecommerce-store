<?php
require_once('../../private/initialize.php');
$page_title = "Check out";
include(SHARED_PATH . '/public_header.php');
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
                    <h3>Product Name</h3>
                    <p>Color: White</p>
                </div>
            </div>
            <div class="review__item__right">
                <p>$39.00</p>
                <p>Quantity: 01</p>
            </div>
        </div>
    </fieldset>
    <fieldset class="delivery__information">
        <legend>
            <h2>Delivery Information</h2>
        </legend>
        <form action="">
            <div class="delivery__information__form">
                <div class="form__group">
                    <label for="first-name" class="delivery__information__label">First Name</label>
                    <input type="text" name="" id="first-name">
                </div>
                <div class="form__group">
                    <label for="last-name" class="delivery__information__label">Last Name</label>
                    <input type="text" name="" id="last-name">
                </div>
                <div class="form__group">
                    <label for="address" class="delivery__information__label">Address</label>
                    <input type="text" name="" id="address">
                </div>
                <div class="form__group">
                    <label for="country" class="delivery__information__label">Country</label>
                    <input type="text" name="" id="country">
                </div>
                <div class="form__group">
                    <label for="city" class="delivery__information__label">City</label>
                    <input type="text" name="" id="city">
                </div>
                <div class="form__group">
                    <label for="address" class="delivery__information__label">Zip</label>
                    <input type="number" name="" id="zip">
                </div>
                <div class="form__group">
                    <label for="address" class="delivery__information__label">Mobile</label>
                    <input type="number" name="" id="mobile">
                </div>
                <div class="form__group">
                    <label for="address" class="delivery__information__label">Email</label>
                    <input type="email" name="" id="email">
                </div>
            </div>
            <fieldset class="card__information">
                <legend>
                    <h3>Card Information</h3>
                </legend>
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
            <button type="submit" class="place__order__btn"><a href="#">Place Order</a></button>

        </form>
    </fieldset>
</div>


<?php
include(SHARED_PATH . '/public_footer.php');
