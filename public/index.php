<?php
require_once('../private/initialize.php');

$page_title = "Home";
include(SHARED_PATH . '/public_header.php');
?>
<div class="container">
    <header>
        <div class="banner">
            <h2 class="sale"><span class="discount__percent">20%</span> off</h2>
            <h2 class="sale__season">Summer Collections</h2>
        </div>
    </header>
    <div class="main__content">
        <main>
            <h1 class="text-center featured__title"><span>Featured Products</span></h1>
            <div class="product__container">
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
                <div class="product__card">
                    <div class="">
                        <img class="product__img" src="./images/products/product-img-1.jpg" alt="">
                    </div>
                    <h3 class="product__name">T shirt</h3>
                    <h4 class="product__price">39$</h4>
                    <div class="product__action__links">
                        <a href="#">View</a>
                        <a href="#">Buy</a>
                    </div>
                </div>
            </div>
        </main>
        <aside>
            <div class="categories">
                <h3 class="text-center aside__heading">Categories</h3>
                <ul class="category__items">
                    <li class="category__item"><a href="#" class="category__link">Shopping Bags</a></li>
                    <li class="category__item"><a href="#" class="category__link">Formal Dress</a></li>
                    <li class="category__item"><a href="#" class="category__link">Casual Dress</a></li>
                    <li class="category__item"><a href="#" class="category__link">Watches</a></li>
                    <li class="category__item"><a href="#" class="category__link">Shoes</a></li>
                </ul>
            </div>
            <div class="product__selection">
                <h3 class="text-center aside__heading">Select Products</h3>
                <form action="">
                    <select class="select__item" name="by-brand" id="">
                        <option value="">By Brand</option>
                        <option value="">Brand 1</option>
                    </select>
                    <select class="select__item" name="by-brand" id="">
                        <option value="">By Price</option>
                        <option value="">10$ - 50$</option>
                    </select>
                </form>
            </div>
            <div class="free__shipping__badge">
                <h3>FREE SHIPPING</h3>
                <p id="on">on</p>
                <p id="shipping__price">$50</p>
                <p id="more">and more</p>
            </div>
            <div class="newsletter__badge">
                <p><span class="text-xl">Subscribe</span> to our <span class="text-l">newsletter</span></p>
            </div>
            <form action="" class="newsletter__form">
                <div class="form__group">
                    <label for="newsletter-name">Name:</label>
                    <input class="newsletter__input" type="text" name="newsletter-name" id="newsletter-name" autocomplete="off">
                </div>
                <div class="form__group">
                    <label for="newsletter-email">Email ID:</label>
                    <input class="newsletter__input" type="email" name="newsletter-email" id="newsletter-email" autocomplete="off">
                </div>
                <div class="form__group newsletter__submit">
                    <input type="submit" value="Join">
                </div>
            </form>
            <div class="social__badge">
                <img class="social__logo" src="./images/fb-logo.jpeg" alt="">
                <a href="#">Become a fan</a>
            </div>
            <div class="social__badge">
                <img class="social__logo" src="./images/twitter-logo.jpeg" alt="">
                <a href="#">Follow Us!</a>
            </div>
        </aside>
    </div>

</div>
<?php
include(SHARED_PATH . '/public_footer.php');
?>