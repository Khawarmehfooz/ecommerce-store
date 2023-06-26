<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store - <?php echo htmlspecialchars($page_title); ?></title>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/public.css') ?>">
</head>

<body>
    <div class="nav">
        <div class="top__bar">
            <h1 class="brand">STORE</h1>
            <form action="" class="search__form">
                <input type="search" placeholder="Search Products" autocomplete="off" name="search" id="search__input">
                <input type="submit" id="search__btn" value="Go">
            </form>
        </div>
        <ul class="nav__items">
            <li class="nav__item"><a href="../../public/index.php" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="" class="nav__link">Products</a></li>
            <li class="nav__item"><a href="#" class="nav__link">About Us</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Contact Us</a></li>
        </ul>

    </div>