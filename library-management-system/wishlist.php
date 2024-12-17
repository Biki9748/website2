<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #fff8e9;
            /* background-color: white; */
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
</head>

<body>

    <div class="container wishlist-container">
        <div class="back-btn">
            <a href="category.php" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left"></i> Back to Category
            </a>
        </div>
        <h4>Your Wishlist</h4>
        <div id="wishlist-items"></div>
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

</body>

</html>