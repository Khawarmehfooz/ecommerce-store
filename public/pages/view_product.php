<?php
require_once('../../private/initialize.php');
$page_title = "View Product";
include(SHARED_PATH . '/public_header.php');
?>
<div class="container">
    <div class="product__details">
        <div class="product__gallery">
            <img src="../images/products/product-img-1.jpg" alt="">
        </div>
        <div class="product__detail">
            <h1 class="product__name">Product Name</h1>
            <p class="product__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, nihil!</p>
            <hr>
            <h2 class="product__price">$39</h2>
            <hr>
            <form action="">
                <div class="form__group">
                    <label for="color">Choose Color:</label>
                    <select name="" id="color">
                        <option value="">Choose Color</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="quantity">Quantity: </label>
                    <input type="number" name="" id="quantity" min="1" max="5">
                </div>
                <hr>
                <div class="form__group">
                    <label for="size">Select Size:
                    </label>
                    <select name="" id="size">
                        <option value="">Select Size</option>
                        <option value="s">Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </div>
                <hr>
                <input id="buy__now__btn" type="submit" value="Buy Now">
            </form>
            <h3>Size Chart</h3>
            <table border="1">
                <tr>
                    <th>Size</th>
                    <th>Chest</th>
                    <th>Length</th>
                    <th>Sleeve Lenght</th>
                </tr>
                <tr>
                    <td></td>
                    <td>(inches)</td>
                    <td>(inches)</td>
                    <td>(inches)</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>18.5</td>
                    <td>25.5</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>20</td>
                    <td>27</td>
                    <td>7.5</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>21</td>
                    <td>28</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>XL</td>
                    <td>22</td>
                    <td>29</td>
                    <td>9</td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?php
include(SHARED_PATH . '/public_footer.php');
