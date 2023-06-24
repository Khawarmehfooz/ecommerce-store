<?php
require_once('../../private/initialize.php');
$page_title = "View Product";
include(SHARED_PATH . '/public_header.php');
// 
$product_id = htmlspecialchars($_GET['product_id']);
// echo $id;
$sql = "SELECT * FROM products WHERE product_id = '" . $product_id . "'";
$res = mysqli_query($db, $sql);

?>
<div class="container">
    <?php while ($product_detail = mysqli_fetch_assoc($res)) { ?>
        <div class="product__details">
            <div class="product__gallery">
                <img src="../images/products/product-img-1.jpg" alt="">
            </div>
            <div class="product__detail">
                <h1 class="product__name"><?php echo htmlspecialchars($product_detail["product_name"]); ?></h1>
                <p class="product__description"><?php echo htmlspecialchars($product_detail["product_description"]); ?></p>
                <hr>
                <h2 class="product__price">$<?php echo htmlspecialchars($product_detail["product_price"]); ?></h2>
                <hr>
                <form action="./checkout.php?product_id=<?php echo htmlspecialchars(urlencode($product_id)) ?>" method="post">
                    <div class="form__group">
                        <label for="color">Choose Color:</label>
                        <select name="color" id="color">
                            <option value="">Choose Color</option>
                            <option value="<?php echo htmlspecialchars($product_detail["product_color"]); ?>"><?php echo htmlspecialchars($product_detail["product_color"]); ?></option>
                        </select>
                    </div>
                    <div class="form__group">
                        <label for="quantity">Quantity: </label>
                        <input type="number" name="quantity" id="quantity" min="1" max="5">
                    </div>
                    <hr>
                    <div class="form__group">
                        <label for="size">Select Size:
                        </label>
                        <select name="size" id="size">
                            <option value="">Select Size</option>
                            <option value="s">Small</option>
                            <option value="m">Medium</option>
                            <option value="l">Large</option>
                            <option value="xl">Extra Large</option>
                        </select>
                    </div>
                    <hr>
                    <!-- <a type="submit" id="buy__now__btn" href="./checkout.php?product_id=<?php echo htmlspecialchars(urlencode($product_id)) ?>">Buy Now</a> -->
                    <input id="buy__now__btn" type="submit" value="Buy Now">
                </form>
            <?php } ?>
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
