<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: sans-serif;
        background-color: #fff8e9;
        overflow-x: hidden;
    }

    .wishlist-container {
        padding: 20px;
    }

    .wishlist-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .wishlist-item img {
        width: 50px;
        height: 70px;
        object-fit: cover;
        margin-right: 20px;
    }

    .remove-btn {
        margin-left: auto;
        cursor: pointer;
        color: red;
    }

    .back-btn {
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>

<body>
    <div class="container-fluid account profile">
        <div class="row vh-100">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-3" style="background-color: cadetblue;">
                <div class="text-left mb-4">
                    <div class="profile-image" id="profileImageContainer">
                        <i class="fas fa-user"></i>
                        <input type="file" id="profileImageInput" accept="image/*" style="display: none;">
                        <i class="fas fa-pencil-alt edit-icon" id="editIcon"
                            style="position: absolute; bottom: 10px; right: 10px; cursor: pointer;"></i>
                    </div>
                    <h5 class="mt-3">Greetings!</h5>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="account.php"><i class="fa-solid fa-user"></i> My Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="fa-solid fa-heart"></i> My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-solid fa-book"></i> Favourite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="userLogout()"><i class="fa-solid fa-trash"></i> Logout</a>
                    </li>
                    <!-- Added Back to Home button -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
                    </li>
                </ul>
            </div>

            <!-- Profile Content -->
            <div class="col-md-9 col-lg-10 main-content p-5">
                <div class="container wishlist-container">
                    <div class="back-btn">
                        <a href="category.php" class="btn btn-outline-dark">
                            <i class="fas fa-arrow-left"></i> Back to Category
                        </a>
                    </div>
                    <br>
                    <div id="wishlist-items"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Load wishlist items from localStorage
        let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

        // Ensure no invalid items are in the wishlist
        function cleanWishlist() {
            wishlist = wishlist.filter(item => item.title && item.image);  // Keep only valid items
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
        }

        // Function to load wishlist items
        function loadWishlistItems() {
            const wishlistContainer = document.getElementById('wishlist-items');
            wishlistContainer.innerHTML = '';  // Clear existing items

            // Ensure no invalid items are in the list before rendering
            cleanWishlist();

            if (wishlist.length === 0) {
                wishlistContainer.innerHTML = '<p>Your wishlist is empty!</p>';
                return;
            }

            wishlist.forEach(item => {
                const wishlistItem = document.createElement('div');
                wishlistItem.classList.add('wishlist-item');
                wishlistItem.innerHTML = `
            <img src="${item.image}" alt="${item.title}">
            <div>
                <strong>${item.title}</strong>
            </div>
            <div class="remove-btn" data-title="${item.title}" data-image="${item.image}">
                <i class="fas fa-times"></i> Remove
            </div>
        `;
                wishlistContainer.appendChild(wishlistItem);
            });
        }

        // Event delegation to handle the 'Remove' button
        document.getElementById('wishlist-items').addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('remove-btn') || event.target.closest('.remove-btn')) {
                const removeButton = event.target.closest('.remove-btn');
                const title = removeButton.getAttribute('data-title');
                const image = removeButton.getAttribute('data-image');

                // Remove the item from wishlist
                removeFromWishlist(title, image);
            }
        });

        // Remove item from wishlist
        function removeFromWishlist(title, image) {
            wishlist = wishlist.filter(item => item.title !== title || item.image !== image);
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            loadWishlistItems();  // Reload wishlist after removal
        }

        // Load wishlist items on page load
        loadWishlistItems();
    </script>

    <script>
        const profileImageContainer = document.getElementById('profileImageContainer');
        const profileImageInput = document.getElementById('profileImageInput');
        const profileImageIcon = profileImageContainer.querySelector('i.fa-user');
        const editIcon = document.getElementById('editIcon');

        function loadProfileImage() {
            const savedImage = localStorage.getItem('profileImage');
            if (savedImage) {
                profileImageContainer.style.backgroundImage = `url(${savedImage})`;
                profileImageContainer.style.backgroundSize = 'cover';
                profileImageContainer.style.backgroundPosition = 'center';
                profileImageIcon.style.display = 'none';
            }
        }

        editIcon.addEventListener('click', () => {
            const savedImage = localStorage.getItem('profileImage');
            if (savedImage) {
                const confirmRemove = confirm('Do you want to remove the current image or upload a new one?');
                if (confirmRemove) {
                    profileImageContainer.style.backgroundImage = 'none';
                    profileImageIcon.style.display = 'block';
                    localStorage.removeItem('profileImage');
                } else {
                    profileImageInput.click();
                }
            } else {
                profileImageInput.click();
            }
        });

        profileImageInput.addEventListener('change', function () {
            const file = profileImageInput.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const imageUrl = e.target.result;
                profileImageContainer.style.backgroundImage = `url(${imageUrl})`;
                profileImageContainer.style.backgroundSize = 'cover';
                profileImageContainer.style.backgroundPosition = 'center';
                profileImageIcon.style.display = 'none';
                localStorage.setItem('profileImage', imageUrl);
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        window.addEventListener('load', loadProfileImage);
    </script>

    <!-- logout js  -->
    <script>
        function userLogout() {
            // Set login state to false
            localStorage.setItem('isLoggedIn', 'false');
            // Redirect to home page
            window.location.href = 'index.php'; // Change 'index.html' to your actual home page URL
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>