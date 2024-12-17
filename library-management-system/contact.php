<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Contact Page</title>
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

    .contactInfo {
        display: flex;
    }

    .form-container {
        max-width: 700px;
        width: 100%;
        padding: 20px 28px;
        border: solid 1px black;
        border-radius: 5px;
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

    .contactInfo .pt1 {
        font-size: 40px;
        padding: 15px;
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
                                <a class="nav-link mx-lg-2" href="category.php">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-2" aria-current="page" href="#">Contact Us</a>
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

    <!--hero-->
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://storage.googleapis.com/a1aa/image/3166b407-41d0-4430-8a10-51c8ad6084e3.jpeg"
                        class="d-block w-100" style="height: 500px;" alt="...">
                    <div class="carousel-caption d-none d-md-block d-sm-block">
                        <h1 style="font-weight: 700; color: white;">Contact Now</h1>
                        <h5>Get in Touch and let us know how we can help</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--information section-->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-5">
                <div class="heading">
                    <h1>Get in Touch</h1>
                    <p>Feel free to reach out to us, anytime! we try our best to reach you.</p>
                </div>
                <div class="contactInfo">
                    <div class="pt1">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                    </div>
                    <div class="pt2">
                        <h3>Head Office</h3>
                        <p>G8MM+6CF, Belvedere Rd, Block A, Alipore,<br>
                            Kolkata, West Bengal<br>
                            70002</p>
                    </div>
                </div>
                <div class="contactInfo">
                    <div class="pt1">
                        <span><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <div class="pt2">
                        <h3>Email Us</h3>
                        <p>support@yourdomain.edu</p>
                    </div>
                </div>
                <div class="contactInfo">
                    <div class="pt1">
                        <span><i class="fa-solid fa-phone-volume"></i></span>
                    </div>
                    <div class="pt2">
                        <h3>Call Us</h3>
                        <p>Phone : +4589632578 <br>Fax : +6989542365</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="img-wrapper">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                        alt="" style="height: 250px; width: 100%;">
                </div>
                <div class="location">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d471709.4037536511!2d88.33356!3d22.533066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02775b4c0615c9%3A0x37cd81c0c0a20ff2!2sThe%20National%20Library%20of%20India!5e0!3m2!1sen!2sin!4v1731133932776!5m2!1sen!2sin"
                        style="border:0; width: 100%; height: 220px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--msg section-->
    <div class="container-fluid mt-lg-4">
        <div class="msg_heading bg-white" style="text-align: center; color: cadetblue; padding: 45px;">
            <h2>Happy reading!</h2>
            <p>Thank you for visiting our library! If you have any questions or need more information, feel free to
                reach out to us through our "Contact Us" page on our website. We're here to help!</p>
        </div>
    </div>

    <div class="container mt-4 d-flex justify-content-center align-content-center">
        <div class="form-container">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="username1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="username1">
                </div>
                <div class="col-md-6">
                    <label for="username2" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="username2">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="ph_no" class="form-label">Phone No</label>
                    <input type="password" class="form-control" id="ph_no">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="textarea" class="form-control" id="address" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city">
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select id="state" class="form-select">
                        <option selected>Kolkata</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="msg" class="form-label">Send Message</label>
                    <textarea class="form-control" rows="3" id="msg"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <!--footer-->
    <footer class="footer mt-5">
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

    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>