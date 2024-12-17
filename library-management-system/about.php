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
  <title>About Page</title>
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


  main {
    padding: 2rem;
    text-align: center;
  }

  h1 {
    color: #333;
  }

  .team {
    margin-top: 2rem;
  }

  .team-member {
    text-align: center;
    margin: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* Centers the content vertically */
    align-items: center;
    /* Centers the content horizontally */
  }

  .team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    background-position: center;
    border: 3px solid cadetblue;
    box-shadow: 0 6px 8px rgba(60, 35, 173, 0.2);
  }

  .team-container {
    display: flex;
    justify-content: center;
    /* Horizontally centers the items */
    align-items: center;
    /* Vertically centers the items */
    gap: 20px;
    flex-wrap: wrap;
    /* Ensures items wrap in case of small screen */
    margin: 0 auto;
  }


  label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
  }

  input {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border-radius: 4px;
    border: 1px solid #ddd;
    font-size: 16px;
    transition: border 0.3s ease;
  }

  input:focus {
    border-color: #060b11;
    outline: none;
    box-shadow: 0 0 5px rgba(12, 107, 216, 0.726);
  }

  hr {
    color: #060b11;
    width: auto;
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
          <img
            src="https://static.vecteezy.com/system/resources/thumbnails/024/043/963/small_2x/book-icon-clipart-transparent-background-free-png.png"
            alt="logo" style="height: 40px; width: 40px;">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3" style="font-size: 15px; font-weight: 700;">
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="category.php">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active mx-lg-2" aria-current="page" href="#">About</a>
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

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>


  <main class="about-us-section container">
    <!-- About Us Section -->
    <div class="row align-items-start my-5" style="min-height: 100vh;">
      <!-- Text Box Container -->
      <div class="col-md-6 order-md-2 text-md-start d-flex flex-column justify-content-between">
        <div class="box"
          style="background-color: #fafafc; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
          <h1 class="fs-3 fw-bold text-dark mb-4" style="border-bottom: 4px solid cadetblue; padding-bottom: 10px;">
            About Us</h1>
          <p class="fs-5 text-muted mb-3">
            Welcome to our Library Management System! Our goal is to make book borrowing and management as seamless as
            possible.
          </p>
          <p class="fs-5 text-muted mb-3">
            Our library offers a diverse collection of books, journals, and multimedia resources to support lifelong
            learning.
          </p>
          <div class="mb-3">
            <p class="fs-4 text-dark mb-2">Our Mission:</p>
            <p class="fs-5 text-muted">Empower communities through knowledge and access to resources.</p>
          </div>
          <div>
            <p class="fs-4 text-dark mb-2">Our Vision:</p>
            <p class="fs-5 text-muted">To be a leading library platform for innovation and collaboration.</p>
          </div>
        </div>
        <div class="my-4">
          <label for="feedback" class="form-label">Send your feedback</label>
          <input type="text" id="feedback" class="form-control" placeholder="Enter your feedback" />
          <button class="btn btn-outline-secondary mt-2">Send</button>
        </div>
      </div>
      <!-- Image Container -->
      <div class="col-md-6 order-md-1 d-flex">
        <img class="img-fluid rounded-lg shadow-sm align-self-stretch"
          src="https://p0.pikist.com/photos/184/676/books-shelf-rack-library-school-education-knowledge-read-people.jpg"
          style="object-fit: cover;" />
      </div>
    </div>


    <hr />

    <!-- Team Section -->
    <div class="team">
      <h2 class="mb-4" style="color: cadetblue;">Meet Our Team</h2>
      <div class="team-container">
        <div class="team-member">
          <img src="assets2/member1.jpg" alt="Team Member 1">
          <p>AKASH MAJUMDER - Frontend</p>
        </div>
        <div class="team-member">
          <img src="assets2/member2.jpg" alt="Team Member 2">
          <p>POUSHALI GHATA - Frontend</p>
        </div>
        <div class="team-member">
          <img src="assets2/member3.jpg" alt="Team Member 3">
          <p>BUDDHADEB BISWAS - Frontend</p>
        </div>
        <div class="team-member">
          <img src="assets2/member4.jpg" alt="Team Member 4">
          <p>BIKI BISWAS - Backend + Frontend</p>
        </div>
        <div class="team-member">
          <img src="assets2/member5.jpg" alt="Team Member 5">
          <p>MADHURA SARKAR - Backend + Frontend</p>
        </div>
      </div>
    </div>
  </main>

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