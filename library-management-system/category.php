<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- font-ws css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style2.css"> -->
    <title>Category</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-color: rgb(255, 248, 233);
        /* background-color: white; */
        overflow-x: hidden;
    }

    /* navbar starts  */
    .nav-link {
        position: relative;
        color: cadetblue;
    }

    .nav-link:hover,
    .nav-link.active {
        color: black;
    }

    a {
        padding-top: 4px;
        text-decoration: none;
        color: #650707;
        float: left;
    }

    a:hover {
        color: #0a1eb8;
    }

    @media (min-width:991px) {
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: rgb(37, 110, 72);
            visibility: hidden;
            transition: 0.3 ease-in-out;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
            visibility: visible;
        }
    }

    /* Account Dropdown */
    .dropdown-menu {
        border-radius: 0.5rem;
        padding: 10px;
        right: 30px;
    }

    .dropdown-item {
        color: #5F9EA0;
    }

    .dropdown-item:hover {
        background-color: #5F9EA0;
        color: white;
    }

    .btn {
        font-size: 15px;
        font-weight: 500;
    }

    .additional-category {
        display: none;
        /* Hide additional categories by default */
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        /* Smooth transition effect */
    }

    /* Optional: Style the down arrow button */
    .downarrow {
        width: 50px;
        height: 50px;
        cursor: pointer;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card {
        position: relative;
        /* This allows the heart icon to be positioned relative to the card */
    }

    .heart-icon {
        position: absolute;
        bottom: 10px;
        right: 10px;
        cursor: pointer;
    }

    /* footer starts  */

    footer {
        font-size: 14px;
        color: #777;
    }

    /*custom css for footer*/
    .footer {
        background-color: #222;
        color: #fff;
        padding: 40px 0;
        font-size: 14px;
    }

    .footer h5 {
        color: #fff;
        margin-bottom: 20px;
    }

    .footer a {
        color: #bbb;
        text-decoration: none;
    }

    .footer a:hover {
        color: #fff;
    }

    .social-icons i {
        font-size: 20px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons i:hover {
        color: #007bff;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        font-size: 12px;
    }

    .register-section input {
        border: 1px solid #ddd;
        padding: 10px;
        width: 80%;
        margin-right: 10px;
    }
</style>


<body>
    <!--header section-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-light" style="height: 60px;">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="#">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/024/043/963/small_2x/book-icon-clipart-transparent-background-free-png.png"
                        alt="logo" style="height: 40px; width: 40px;">
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3"
                            style="font-size: 15px; font-weight: 700;">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-2" aria-current="page" href="#">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Login Button (will be replaced after login) -->
                <a href="login.php" class="btn login-button" id="loginButton" style="color: #5F9EA0;">Login</a>

                <!-- Account Icon with Dropdown (hidden initially) -->
                <div class="dropdown d-none" id="accountDropdown">
                    <a href="#" class="icon-box" id="accountIcon" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user" style="color: #5F9EA0; margin-right: 10px;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountIcon">
                        <li><a class="dropdown-item" href="profile.php"><i class="fa-solid fa-circle-user"
                                    style="margin-right: 10px;"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="account.php"><i class="fa-solid fa-house-user"
                                    style="margin-right: 10px;"></i>Account</a></li>
                        <li><a class="dropdown-item" href="wishlist.php"><i class="fa-solid fa-heart"
                                    style="margin-right: 10px;"></i>Wish to Read</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" onclick="userLogout()">Logout →</a></li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- Category Section -->
    <div class="container mt-4" id="category">
        <div class="heading">
            <p style="color: red; font-weight: 700;"><small>TOP CATEGORIES</small></p>
            <div class="inner-heading d-flex">
                <h2 class="flex-grow-1">Explore Categories</h2>
            </div>
            <hr>
        </div>

        <!-- Categories Section -->
        <div class="row mt-2 justify-content-center" id="category-list">
            <div class="col-md-4 col-lg-3 mb-2"> <!-- c1 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#trending"><b>Trending</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2"> <!-- c2 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#popular"><b>Popular</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2"> <!-- c3 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#drama&poetry"><b>Drama & Poetry</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2"> <!-- c4 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#childernfiction"><b>Children's Fiction</b></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hidden Additional Categories -->
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c5 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#mystry/thriller"><b>Mystery/Thriller</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c6 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#horror"><b>Horror</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c7 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#romance"><b>Romance</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c8 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#youngadult"><b>Young Adult(YA)</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c8 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#programming"><b>Programming</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c8 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#business"><b>Business</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c8 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#literature"><b>Literature</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-2 additional-category"> <!-- c8 -->
                <div class="category">
                    <div class="card">
                        <div class="card-body">
                            <a href="category.php#arthistory"><b>Art & History</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Down Arrow Button -->
        <div class="downarrow h-30"
            style="background-color: #fff; display: flex; justify-content: center; align-items: center;">
            <a href="javascript:void(0)" id="view-more" onclick="toggleCategories()">
                <i class="fa-solid fa-chevron-down" style="font-size: 24px;"></i>
            </a>
        </div>
    </div>

    <!-- JavaScript to Toggle Categories with Animation -->
    <script>
        function toggleCategories() {
            // Get all categories with the class 'additional-category'
            var categories = document.querySelectorAll('.additional-category');
            var viewMoreIcon = document.querySelector('#view-more i');

            categories.forEach(function (category) {
                // Toggle visibility with animation
                if (category.style.display === 'none' || category.style.display === '') {
                    category.style.display = 'block';
                    setTimeout(function () {
                        category.style.opacity = 1; // Fade in the category
                    }, 10);
                } else {
                    category.style.opacity = 0; // Fade out the category
                    setTimeout(function () {
                        category.style.display = 'none';
                    }, 500); // Wait until fade-out is complete
                }
            });

            // Toggle the down arrow to up arrow and vice versa
            if (viewMoreIcon.classList.contains('fa-chevron-down')) {
                viewMoreIcon.classList.remove('fa-chevron-down');
                viewMoreIcon.classList.add('fa-chevron-up');
            } else {
                viewMoreIcon.classList.remove('fa-chevron-up');
                viewMoreIcon.classList.add('fa-chevron-down');
            }
        }
    </script>

    <!--Trending books-->
    <div class="container mt-5" id="trending">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h3 class="flex-grow-1" style="font-style: italic;">What's in Trend</h3>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/27/fb/51/27fb517947c62624f7208ce1cea4f083.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Verity</b><br>by Colleen Hoover</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Verity', 'https://i.pinimg.com/736x/27/fb/51/27fb517947c62624f7208ce1cea4f083.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/12/26/7d/12267d53e8fd8ee5e45f163a0a0608be.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Lost House</b><br>by Melissa Larsen</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Lost House', 'https://i.pinimg.com/736x/12/26/7d/12267d53e8fd8ee5e45f163a0a0608be.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/74/cf/7d/74cf7d6d4f1c45c5f0f718db6a00d5f2.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Archer's Voice</b><br>by Mia Sheridan</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Archer\'s Voice', 'https://i.pinimg.com/736x/74/cf/7d/74cf7d6d4f1c45c5f0f718db6a00d5f2.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/ff/f0/fe/fff0fe3ad2d2cc44ecc75bdc6960cfa2.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Twisted Lies</b><br>by Ana Haung</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Twisted Lies', 'https://i.pinimg.com/736x/ff/f0/fe/fff0fe3ad2d2cc44ecc75bdc6960cfa2.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/88/d1/bc/88d1bcc547472575eb71d891f2e43b74.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Hating Game</b><br>by Sally Throne</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Hating Game', 'https://i.pinimg.com/736x/88/d1/bc/88d1bcc547472575eb71d891f2e43b74.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/c4/6a/ed/c46aed1ca87f97bbf8543d8c4e080245.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Chamber</b><br>by Will Dean</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Chamber', 'https://i.pinimg.com/736x/c4/6a/ed/c46aed1ca87f97bbf8543d8c4e080245.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Popular books -->
    <div class="container mt-5" id="popular">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h3 class="flex-grow-1" style="font-style: italic;">Popular Books</h3>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://blackwells.co.uk/jacket/l/9780099511021.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Educated</b><br>by Tara Westover</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Educated', 'https://blackwells.co.uk/jacket/l/9780099511021.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.abramsbooks.com/cover_images/1/9781419731501_s3.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Dune</b><br>by Frank Herbert</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Dune', 'https://www.abramsbooks.com/cover_images/1/9781419731501_s3.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.thenile.io/r1000/9780471445500.jpg?r=5ea2b271b97fa" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Common Stocks and Uncommon Profits</b><br>by Philip Fisher</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Common Stocks and Uncommon Profits', 'https://i.thenile.io/r1000/9780471445500.jpg?r=5ea2b271b97fa')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.ebayimg.com/images/g/IIEAAOSwOnVg4zQw/s-l500.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>You Are a Badass at Making Money</b><br>by Jen Sincero</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'You Are a Badass at Making Money', 'https://i.ebayimg.com/images/g/IIEAAOSwOnVg4zQw/s-l500.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.betterreading.com.au/wp-content/uploads/2014/08/Untitled-design-20.png"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Big Little Lies</b><br>by Liane Moriarty</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Big Little Lies', 'https://www.betterreading.com.au/wp-content/uploads/2014/08/Untitled-design-20.png')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://imgv2-2-f.scribdassets.com/img/word_document/163569726/original/528448ac16/1580812483?v=1"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Song of Achilles</b><br>by Madeline Miller</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Song of Achilles', 'https://imgv2-2-f.scribdassets.com/img/word_document/163569726/original/528448ac16/1580812483?v=1')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book7-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/originals/1c/47/a3/1c47a32feb1697772e5affdd23fab88a.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Da Vinci Code</b><br>by Dan Brown</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Da Vinci Code', 'https://i.pinimg.com/originals/1c/47/a3/1c47a32feb1697772e5affdd23fab88a.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book8-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/564x/00/ba/3e/00ba3e9d25bacbf5491b67b4fb19195a.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Boomerang</b><br>by Rob Wiggins</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Boomerang', 'https://i.pinimg.com/564x/00/ba/3e/00ba3e9d25bacbf5491b67b4fb19195a.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book9-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.thenile.io/r1000/9780452262935.jpg?r=5e7d61110b596" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>1984</b><br>by George Orwell</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, '1984', 'https://i.thenile.io/r1000/9780452262935.jpg?r=5e7d61110b596')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book10-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://s.yimg.com/fz/api/res/1.2/_uio9swbw8vn4wNRkCvE6g--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpdDtoPTI2MDtxPTgwO3c9MTc4/https://s.yimg.com/zb/imgv1/017e590c-e46f-31a0-a0b5-4efbd3159815/t_500x300"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Girl with the Dragon Tattoo</b><br>by Stieg Larsson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Girl with the Dragon Tattoo', 'https://s.yimg.com/fz/api/res/1.2/_uio9swbw8vn4wNRkCvE6g--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpdDtoPTI2MDtxPTgwO3c9MTc4/https://s.yimg.com/zb/imgv1/017e590c-e46f-31a0-a0b5-4efbd3159815/t_500x300')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book11-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="http://ecx.images-amazon.com/images/I/51es1dfIB%2BL._SY344_BO1,204,203,200_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Millionaire Next Door</b><br>by Thomas J. Stanley</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Millionaire Next Door', 'http://ecx.images-amazon.com/images/I/51es1dfIB%2BL._SY344_BO1,204,203,200_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book12-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn.kobo.com/book-images/2900da46-71e0-42aa-b9a9-e83dabbc6de4/1200/1200/False/one-of-us-is-lying.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>One of Us Is Lying</b><br>by Karen M. McManus</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'One of Us Is Lying', 'https://cdn.kobo.com/book-images/2900da46-71e0-42aa-b9a9-e83dabbc6de4/1200/1200/False/one-of-us-is-lying.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Drama & Poetry-->
    <div class="container mt-5" id="drama&poetry">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Drama & Poetry</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/50/9c/73/509c735e0518adc87c293b59af74c560.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Sadhana</b><br>by Rabindranath Tagore</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Sadhana', 'https://i.pinimg.com/736x/50/9c/73/509c735e0518adc87c293b59af74c560.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/2c/1f/b4/2c1fb443a53b4d0d8e74b29f6abb4690.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Adventures of Huckleberry Finn</b><br>by Mark Twain</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Adventures of Huckleberry Finn', 'https://i.pinimg.com/736x/2c/1f/b4/2c1fb443a53b4d0d8e74b29f6abb4690.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/c8/a5/5d/c8a55d16fa739589252e5e10829e1f0f.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Emma</b><br>by Jane Austen</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Emma', 'https://i.pinimg.com/736x/c8/a5/5d/c8a55d16fa739589252e5e10829e1f0f.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.pinimg.com/736x/5b/69/f9/5b69f94ac92ac0d27622843476a0b9e3.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Great Expectations</b><br>by Charles Dickens</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Great Expectations', 'https://i.pinimg.com/736x/5b/69/f9/5b69f94ac92ac0d27622843476a0b9e3.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://ds.rokomari.store/rokomari110/ProductNew20190903/260X372/Raktakarabi-Rabindranath_Tagore-1ec8d-276319.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Raktakarabi</b><br>by Rabindranath Tagore</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Raktakarabi', 'https://ds.rokomari.store/rokomari110/ProductNew20190903/260X372/Raktakarabi-Rabindranath_Tagore-1ec8d-276319.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781625589064/paradise-lost-9781625589064_hr.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Paradise Lost</b><br>by John Milton</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Paradise Lost', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781625589064/paradise-lost-9781625589064_hr.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Children's Fiction-->
    <div class="container mt-5" id="childernfiction">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Children's Fiction</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://th.bing.com/th/id/OIP.t5JOGfqeIsUkGBzsti-_mAAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.6&pid=1.7"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Charlotte's Web</b><br>by Garth Williams</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Charlotte\'s Web', 'https://th.bing.com/th/id/OIP.t5JOGfqeIsUkGBzsti-_mAAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.6&pid=1.7')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://imgix.bustle.com/scary-mommy/2020/01/best-fantasy-books-rise-of-the-earth-dragon.jpg?w=414"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Rise of the Earth Dragon</b><br>by Tracey West</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Rise of the Earth Dragon', 'https://imgix.bustle.com/scary-mommy/2020/01/best-fantasy-books-rise-of-the-earth-dragon.jpg?w=414')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://m.media-amazon.com/images/I/81RuC2qCSmL._SY522_.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Chronicles of Narnia</b><br>by C. S. Lewis</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Chronicles of Narnia', 'https://m.media-amazon.com/images/I/81RuC2qCSmL._SY522_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://m.media-amazon.com/images/I/81DI+BAN2SL._SY522_.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Harry Potter and the Sorcerer's Stone</b><br>by J.K. Rowling</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Harry Potter and the Sorcerer\'s Stone', 'https://m.media-amazon.com/images/I/81DI+BAN2SL._SY522_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://m.media-amazon.com/images/I/614Z8V0fPXL._SY522_.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Story Thieves</b><br>by James Riley</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Story Thieves', 'https://m.media-amazon.com/images/I/614Z8V0fPXL._SY522_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://m.media-amazon.com/images/I/81VxGPk9YFL._SY522_.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>A Wizard of Earthsea The Earthsea</b><br>by Ursula K. Le Guin</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'A Wizard of Earthsea', 'https://m.media-amazon.com/images/I/81VxGPk9YFL._SY522_.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Mystery/Thriller-->
    <div class="container mt-5" id="mystry/thriller">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Mystery/Thriller</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1545494980i/40916679._SX600_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>A Good Girl's Guide to Murder</b><br>by Holly Jackson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'A Good Girl\'s Guide to Murder', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1545494980i/40916679._SX600_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1588319723i/51335759.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Good Girl, Bad Blood</b><br>by Holly Jackson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Good Girl, Bad Blood', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1588319723i/51335759.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1623112782i/56905097.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>As Good As Dead</b><br>by Holly Jackson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'As Good As Dead', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1623112782i/56905097.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1717351630i/206294753.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Silent Watcher</b><br>by Victor Methos</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Silent Watcher', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1717351630i/206294753.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1709902335i/203578918.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Mirror</b><br>by Nora Roberts</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Mirror', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1709902335i/203578918.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1708004345i/207571151.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Lake of Lost Girls</b><br>by Katherine Greene</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Lake of Lost Girls', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1708004345i/207571151.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Horror-->
    <div class="container mt-5" id="horror">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Horror</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1670090073l/63910262._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Two Twisted Crowns</b><br>by Rachel Gilling</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Two Twisted Crowns', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1670090073l/63910262._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1556171767l/45299992._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>If You Tell</b><br>by Gregg Olson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'If You Tell', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1556171767l/45299992._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1710616939l/200982280._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Perfect Girl</b><br>by Tracy Banghart</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Perfect Girl', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1710616939l/200982280._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1714600043l/201033505._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>She's Always Hungry</b><br>by Eliza Clark</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'She\'s Always Hungry', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1714600043l/201033505._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://th.bing.com/th?id=ODL.db29451830d9f08a30980afe295ff69a&w=130&h=200&c=8&rs=1&qlt=99&o=6&dpr=1.6&pid=13.1"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Monstress</b><br>by Marjorie M. Liu</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Monstress', 'https://th.bing.com/th?id=ODL.db29451830d9f08a30980afe295ff69a&w=130&h=200&c=8&rs=1&qlt=99&o=6&dpr=1.6&pid=13.1')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1708557827l/203579289._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Whispering Night</b><br>by Susan Dennard</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Whispering Night', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1708557827l/203579289._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Romance-->
    <div class="container mt-5" id="romance">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Romance</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1709846581l/207297940._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Serpent and the Wolf</b><br>by Rebecca Robinson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Serpent and the Wolf', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1709846581l/207297940._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1632597571l/17788401._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Ugly Love</b><br>by Colleen Hoover</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Ugly Love', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1632597571l/17788401._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1731714752l/183086339._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Reckless</b><br>by Lauren Roberts</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Reckless', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1731714752l/183086339._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1715980319l/210482187.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Variation</b><br>by Rebecca Yarros</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Variation', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1715980319l/210482187.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1718678821l/204906169._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Lies We Leave Behind</b><br>by Noelle Salazar</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Lies We Leave Behind', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1718678821l/204906169._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1620325671l/50659468._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>A Court of Mist and Fury</b><br>by Sarah J. Maas</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'A Court of Mist and Fury', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1620325671l/50659468._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Young Adult-->
    <div class="container mt-5" id="youngadult">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Young Adult</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553624975l/26032912._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Queen of Nothing</b><br>by Holly Black</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Queen of Nothing', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553624975l/26032912._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1716235205l/207003676._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Skyshade</b><br>by Alex Aster</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Skyshade', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1716235205l/207003676._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674501506l/62816044.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>A Curse for True Love</b><br>by Stephanie Garber</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'A Curse for True Love', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674501506l/62816044.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1596909044l/50548197._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>A Deadly Education</b><br>by Naomi Novik</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'A Deadly Education', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1596909044l/50548197._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1692547104l/182484360._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Reappearance of Rachel Price</b><br>by Holly Jackson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Reappearance of Rachel Price', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1692547104l/182484360._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1710254248l/208515903._SY475_.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Heist Royale</b><br>by Kayvion Lewis</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Heist Royale', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1710254248l/208515903._SY475_.jpg')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Programming-->
    <div class="container mt-5" id="programming">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Programming</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.interviewbit.com/blog/wp-content/uploads/2022/01/A-Handbook-of-Agile-Software-Craftsmanship-227x300.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Clean Code: A Handbook of Agile Software Craftsmanship</b><br>by Robert C. Martin</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'https://www.interviewbit.com/blog/wp-content/uploads/2022/01/A-Handbook-of-Agile-Software-Craftsmanship-227x300.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/03/1a/031af9d7e401bb2d08911c317ecbedad.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Pragmatic Programmer</b><br>by David Thomas</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Pragmatic Programmer', 'https://images.cdn2.buscalibre.com/fit-in/360x360/03/1a/031af9d7e401bb2d08911c317ecbedad.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://kaul.inf.h-brs.de/wem/assets/img/landing-img.png" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>JS (Complete Series)</b><br>by Kyle Simpson</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'JS (Complete Series)', 'https://kaul.inf.h-brs.de/wem/assets/img/landing-img.png')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn2.penguin.com.au/covers/original/9781718502703.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Python Crash Course</b><br>by Eric Matthes</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Python Crash Course', 'https://cdn2.penguin.com.au/covers/original/9781718502703.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://uploads-ssl.webflow.com/5f280c5b57d2edfcbbb057ea/5f288004037f6811b18d3787_23.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Self-taught Programmer</b><br>by Cory Althoff</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Self-taught Programmer', 'https://uploads-ssl.webflow.com/5f280c5b57d2edfcbbb057ea/5f288004037f6811b18d3787_23.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://th.bing.com/th/id/OIP.tvCmfAvCwjjhqaSzsI0WVgHaJy?rs=1&pid=ImgDetMain"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Linux Programming Interface</b><br>by Michael Kerrisk</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Linux Programming Interface', 'https://th.bing.com/th/id/OIP.tvCmfAvCwjjhqaSzsI0WVgHaJy?rs=1&pid=ImgDetMain')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Business-->
    <div class="container mt-5" id="business">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Business</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1449773595i/28168630.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Good To Great</b><br>by Instaread</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Good To Great', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1449773595i/28168630.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn2.penguin.com.au/covers/original/9781473565425.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Atomic Habits</b><br>by James Clear</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Atomic Habits', 'https://cdn2.penguin.com.au/covers/original/9781473565425.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn11.bigcommerce.com/s-yneuaokjib/products/16979/images/269748/11323_500__36945.1706777003.1280.1280.png"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The First 90 Days</b><br>By Michael Watkins</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The First 90 Days', 'https://cdn11.bigcommerce.com/s-yneuaokjib/products/16979/images/269748/11323_500__36945.1706777003.1280.1280.png')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn11.bigcommerce.com/s-yneuaokjib/images/stencil/250x260/attribute_rule_images/49045_source_1723707036.png"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Leading Change</b><br>By John Kotter</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Leading Change', 'https://cdn11.bigcommerce.com/s-yneuaokjib/images/stencil/250x260/attribute_rule_images/49045_source_1723707036.png')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://hbr.org/resources/images/products/13892_500.png" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Blue Ocean Strategy</b><br>by W. Chan Kim and Renee Mauborgne</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Blue Ocean Strategy', 'https://hbr.org/resources/images/products/13892_500.png')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://hbr.org/resources/images/products/10833_500.png" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Financial Intelligence</b><br>By Karen Berman, Joe Knight, and John Case</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Financial Intelligence', 'https://hbr.org/resources/images/products/10833_500.png')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Literature-->
    <div class="container mt-5" id="literature">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Literature</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-lg-2"><!--book1-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://imgv2-1-f.scribdassets.com/img/word_document/233992090/original/afa35cbbfb/1583839256?v=1"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>1984</b><br>by George Orwell</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, '1984', 'https://imgv2-1-f.scribdassets.com/img/word_document/233992090/original/afa35cbbfb/1583839256?v=1')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://cdn2.penguin.com.au/covers/original/9781785150357.jpg" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>To Kill A Mockingbird</b><br>by Harper Lee</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'To Kill A Mockingbird', 'https://cdn2.penguin.com.au/covers/original/9781785150357.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781471134746/pride-and-prejudice-9781471134746_hr.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Pride & Prejudice</b><br>By Jane Austen</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Pride & Prejudice', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781471134746/pride-and-prejudice-9781471134746_hr.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://media.npr.org/assets/img/2012/08/14/catcher-in-the-rye_custom-242c361fe1b66a85be7cf00f8db2140ebd446d09-s6-c30.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Catcher in the Rye</b><br>By J.D. Salinger</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'The Catcher in the Rye', 'https://media.npr.org/assets/img/2012/08/14/catcher-in-the-rye_custom-242c361fe1b66a85be7cf00f8db2140ebd446d09-s6-c30.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images.thegreatestbooks.org/7p508hup295xehtsp3rh41g9rxus" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Ulysses</b><br>by James Joyce</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'Ulysses', 'https://images.thegreatestbooks.org/7p508hup295xehtsp3rh41g9rxus')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://images.thegreatestbooks.org/frxjk2ln3mmo4nio8u9zvk9te2z1" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>In Search of Lost Time</b><br>by Marcel Proust</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true" style="cursor: pointer;"
                            onclick="toggleWishlist(this, 'In Search of Lost Time', 'https://images.thegreatestbooks.org/frxjk2ln3mmo4nio8u9zvk9te2z1')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Art & History-->
    <div class="container mt-5" id="arthistory">
        <div class="container shadow bg-body-secondary p-2 d-flex">
            <h4 class="flex-grow-1" style="font-style: italic;">Art & History</h4>
            <a href="#">View All</a>
            <hr>
        </div>
        <div class="row justify-content-center mt-3">
            <!-- Book 1 -->
            <div class="col-md-4 col-lg-2">
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.naibooksellers.nl/media/catalog/product/9/7/9780714872780_art-as-therapy-alain-de-botton-john-armstrong-paperback-edition_800.jpg"
                            class="card-img-top" alt="Art As Therapy">
                    </div>
                    <div class="card-body">
                        <p><b>Art As Therapy</b><br>by John Armstrong</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Art As Therapy', 'https://www.naibooksellers.nl/media/catalog/product/9/7/9780714872780_art-as-therapy-alain-de-botton-john-armstrong-paperback-edition_800.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book2-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.artnews.com/wp-content/uploads/2022/08/51WLoxweHhL.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Giorgio Vasari, Lives of the Artists</b><br>by Harper Lee</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Giorgio Vasari, Lives of the Artists', 'https://www.artnews.com/wp-content/uploads/2022/08/51WLoxweHhL.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book3-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://prodimage.images-bn.com/pimages/9780140135152_p0_v2_s1200x630.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Ways of Seeing</b><br>By John Berger</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Ways of Seeing', 'https://prodimage.images-bn.com/pimages/9780140135152_p0_v2_s1200x630.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book4-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.artnews.com/wp-content/uploads/2022/08/81uurBjl9L.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Story of Work</b><br>By E.H. Gombrich</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Story of Work', 'https://www.artnews.com/wp-content/uploads/2022/08/81uurBjl9L.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book5-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.artnews.com/wp-content/uploads/2022/08/61zXfaqpPNL.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>The Art Book</b><br>by The editors of Phaidon</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'The Art Book', 'https://www.artnews.com/wp-content/uploads/2022/08/61zXfaqpPNL.jpg')"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2"><!--book6-->
                <div class="card mb-3">
                    <div class="img-wrapper">
                        <img src="https://www.artnews.com/wp-content/uploads/2022/08/61-SBhyQAL.jpg"
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <p><b>Women, Art, and Society</b><br>by Whitney Chadwick</p>
                        <div class="d-flex justify-content-between">
                            <div class="btn btn-outline-dark">Read</div>
                        </div>
                    </div>
                    <!-- Heart icon in the bottom-right corner -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" aria-hidden="true"
                            onclick="toggleWishlist(this, 'Women, Art, and Society', 'https://www.artnews.com/wp-content/uploads/2022/08/61-SBhyQAL.jpg')"></i>
                    </div>
                </div>
            </div>
            <!-- Repeat for other books -->
        </div>
    </div>


    <!--nothing just to add some colors-->
    <div class="card align-items-center mt-5"
        style="background-image: url(https://cdn.wallpapersafari.com/21/29/flNeIJ.jpg); height: 230px;">
        <div class="card-body">
            <div class="card-text mt-5" style="color: white;">
                <h3>In the quiet corners of a library, readers discover the loudest ideas....</h3>
                <h3>The library is not just a place to read books; it is a place to grow minds.</h3>
            </div>
        </div>
    </div>


    <!--footer-->
    <footer class="footer mt-3">
        <div class="container">
            <div class="row">
                <!-- Contact Section -->
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>123 Digital St, Suite 456, City, Country</p>
                    <p>Phone: +1 234 567 890</p>
                    <p>Email: info@company.com</p>
                </div>
                <!-- Social Media Section -->
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Register Section -->
                <div class="col-md-4">
                    <h5>Register</h5>
                    <p>Subscribe to our newsletter</p>
                    <div class="register-section">
                        <input type="email" id="email" placeholder="Enter your email" required>
                        <div class="btn btn-outline-light mt-3" onclick="subscribe()">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; 2024 Company Name. All Rights Reserved.</p>
        </div>
    </footer>



    <!-- JavaScript for Register Subscription -->
    <script>
        function subscribe() {
            var email = document.getElementById('email').value;
            if (email) {
                alert('Thank you for subscribing with ' + email);
                document.getElementById('email').value = '';  // Clear input after submission
            } else {
                alert('Please enter a valid email address.');
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            if (isLoggedIn === 'true') {
                // Hide the login button and show the account dropdown
                document.getElementById('loginButton').classList.add('d-none');
                document.getElementById('accountDropdown').classList.remove('d-none');
            }

            // Add click event to toggle dropdown for account icon
            const accountIcon = document.getElementById('accountIcon');
            accountIcon.addEventListener('click', function () {
                const dropdownMenu = document.getElementById('accountDropdown').querySelector('.dropdown-menu');
                dropdownMenu.classList.toggle('show');
            });
        });

        // Simulate user logout
        function userLogout() {
            // Set login state to false
            localStorage.setItem('isLoggedIn', 'false');
            // Show the login button
            document.getElementById('loginButton').classList.remove('d-none');
            // Hide the account dropdown
            document.getElementById('accountDropdown').classList.add('d-none');
        }

    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->

    <script>
        let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

        // Add books to the category page dynamically
        function loadCategoryItems() {
            const categoryContainer = document.getElementById('category-items');
            categoryContainer.innerHTML = '';  // Clear existing items

            books.forEach(book => {
                const card = document.createElement('div');
                card.classList.add('col-md-4', 'col-lg-2');
                card.innerHTML = `
                    <div class="card mb-3">
                        <div class="img-wrapper">
                            <img src="${book.image}" class="card-img-top" alt="${book.title}">
                        </div>
                        <div class="card-body">
                            <p><b>${book.title}</b></p>
                        </div>
                        <div class="heart-icon">
                            <i class="fa-regular fa-heart" aria-hidden="true" onclick="toggleWishlist(this, '${book.title}', '${book.image}')"></i>
                        </div>
                    </div>
                `;
                categoryContainer.appendChild(card);
            });

            updateHeartIcons();
        }

        function toggleWishlist(icon, title, image) {
            const bookDetails = { title, image };
            const index = wishlist.findIndex(item => item.title === title);

            if (index === -1) {
                wishlist.push(bookDetails);
                icon.classList.remove("fa-regular", "fa-heart");
                icon.classList.add("fa-solid", "fa-heart");
                alert(`${title} added to your wishlist!`);
            } else {
                wishlist.splice(index, 1);
                icon.classList.remove("fa-solid", "fa-heart");
                icon.classList.add("fa-regular", "fa-heart");
                alert(`${title} removed from your wishlist!`);
            }

            localStorage.setItem('wishlist', JSON.stringify(wishlist));
        }

    </script>




    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>