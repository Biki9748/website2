<!DOCTYPE html>
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

<body>
    <div class="container-fluid account">
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
                        <a class="nav-link active" href="#"><i class="fa-solid fa-book"></i> My Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i> My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favourite.php"><i class="fa-solid fa-heart"></i> Favourite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="userLogout()"><i class="fa-solid fa-trash"></i> Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content p-5">
                <!-- Current Book Section -->
                <div class="current-book p-4 col-12 shadow-sm rounded"
                    style="background: url('https://beffshuff.com/wp-content/uploads/2020/05/IMG_0120-1440x960.jpg'); background-size: contain; background-repeat: no-repeat; width: 100%; height: 350px; position: relative;">
                    <div class="d-flex justify-content-between align-items-center mb-3 p-2"
                        style="background-color: white; border-radius: 10px;">
                        <h3 style="color: #4b0303; font-size: 25px;">
                            Good Girl's Guide to Murder : Holly Jackson
                        </h3>
                        <button class="btn btn-sm text-white" id="changeTitleBtn"
                            style="position: sticky; width: 100px; background-color: cadetblue; font-weight: 500;">Change
                            Title</button>
                    </div>
                    <button class="btn" style="background-color: cadetblue; color: white; font-weight: 500;">Continue
                        Reading</button>
                    <i class="fas fa-pencil-alt" id="changeImageBtn"
                        style="position: static; font-size: 15px; color: white; background-color: rgba(95, 158, 160, 0.433); padding: 5px; border-radius: 50%; cursor: pointer;"></i>
                </div>

                <!-- Library Section -->
                <div class="mt-5">
                    <h4 class="mb-4">My Library (I have Read 🕮)</h4>
                    <div class="row" id="bookLibrary">
                        <!-- Book Cards will be added dynamically here -->
                    </div>
                    <button class="btn btn-sm text-white" id="addBook"
                        style="width: 130px; font-size: 20px; background-color: cadetblue; font-weight: 500;">+ Add
                        Book</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Book -->
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Add New Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addBookForm">
                        <div class="mb-3">
                            <label for="bookImageUrl" class="form-label">Book Image URL</label>
                            <input type="url" class="form-control" id="bookImageUrl" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Book Title</label>
                            <input type="text" class="form-control" id="bookTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookAuthor" class="form-label">Author</label>
                            <input type="text" class="form-control" id="bookAuthor" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBookBtn">Save Book</button>
                </div>
            </div>
        </div>
    </div>


    <!-- title and img change script  -->
    <script>
        // Get the buttons for changing image and title
        const changeImageBtn = document.getElementById('changeImageBtn');
        const changeTitleBtn = document.getElementById('changeTitleBtn');

        // Get the current book div and its title
        const currentBookDiv = document.querySelector('.current-book');
        const currentTitle = document.querySelector('.current-book h3');

        // Load the saved values from localStorage
        function loadBookData() {
            const savedImageUrl = localStorage.getItem('bookImage');
            const savedTitle = localStorage.getItem('bookTitle');

            // Apply saved image if available
            if (savedImageUrl) {
                currentBookDiv.style.backgroundImage = `url(${savedImageUrl})`;
                currentBookDiv.style.backgroundSize = 'contain';
                currentBookDiv.style.backgroundRepeat = 'no-repeat';
            }

            // Apply saved title if available
            if (savedTitle) {
                currentTitle.textContent = savedTitle;
            }
        }

        // Event listener for changing the image
        changeImageBtn.addEventListener('click', () => {
            const newImageUrl = prompt('Enter the new image URL:');
            if (newImageUrl) {
                currentBookDiv.style.backgroundImage = `url(${newImageUrl})`;
                currentBookDiv.style.backgroundSize = 'contain';
                currentBookDiv.style.backgroundRepeat = 'no-repeat';
                // Save the new image URL to localStorage
                localStorage.setItem('bookImage', newImageUrl);
            }
        });

        // Event listener for changing the title
        changeTitleBtn.addEventListener('click', () => {
            const newTitle = prompt('Enter the new title of the book:');
            if (newTitle) {
                currentTitle.textContent = newTitle;
                // Save the new title to localStorage
                localStorage.setItem('bookTitle', newTitle);
            }
        });

        // Load the saved data when the page loads
        window.addEventListener('load', loadBookData);

    </script>


    <!-- js for updating profle pic  -->
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

    <!-- JS Scripts -->
    <script>
        // Show the modal for adding a new book
        document.getElementById('addBook').addEventListener('click', function () {
            const addBookModal = new bootstrap.Modal(document.getElementById('addBookModal'));
            addBookModal.show();
        });
        
        // Add new book to the library
        document.getElementById('saveBookBtn').addEventListener('click', function () {
            const bookImageUrl = document.getElementById('bookImageUrl').value;
            const bookTitle = document.getElementById('bookTitle').value;
            const bookAuthor = document.getElementById('bookAuthor').value;
        
            if (bookImageUrl && bookTitle && bookAuthor) {
                // Create a new book object
                const newBook = {
                    imageUrl: bookImageUrl,
                    title: bookTitle,
                    author: bookAuthor
                };
        
                // Get the existing books from localStorage or initialize an empty array
                let books = JSON.parse(localStorage.getItem('books')) || [];
        
                // Add the new book to the array
                books.push(newBook);
        
                // Save the updated books array to localStorage
                localStorage.setItem('books', JSON.stringify(books));
        
                // Create new book card
                addBookCard(newBook);
        
                // Close the modal
                const addBookModal = bootstrap.Modal.getInstance(document.getElementById('addBookModal'));
                addBookModal.hide();
        
                // Clear form fields
                document.getElementById('addBookForm').reset();
            }
        });
        
        // Function to add a book card dynamically
        function addBookCard(book) {
            const bookLibrary = document.getElementById('bookLibrary');
            const newBookCard = document.createElement('div');
            newBookCard.classList.add('col-md-3', 'col-6', 'mb-4');
            newBookCard.innerHTML = `
                <div class="card position-relative">
                    <img src="${book.imageUrl}" class="card-img-top" alt="${book.title}">
                    <div class="card-body">
                        <h6 class="card-title">${book.title}</h6>
                        <p class="card-text">${book.author}</p>
                        <i class="fas fa-times-circle remove-book" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"></i>
                    </div>
                </div>
            `;
            bookLibrary.appendChild(newBookCard);
        
            // Add event listener to remove book card
            const removeBookBtn = newBookCard.querySelector('.remove-book');
            removeBookBtn.addEventListener('click', function () {
                // Remove the book from localStorage
                let books = JSON.parse(localStorage.getItem('books')) || [];
                books = books.filter(b => b.title !== book.title); // Remove the book by title
                localStorage.setItem('books', JSON.stringify(books));
        
                // Remove the book card from the UI
                bookLibrary.removeChild(newBookCard);
            });
        }
        
        // Function to load the saved books from localStorage when the page loads
        function loadBooks() {
            const books = JSON.parse(localStorage.getItem('books')) || [];
            books.forEach(book => {
                addBookCard(book);
            });
        }
        
        // Load the books when the page loads
        window.addEventListener('load', loadBooks);
        
        </script>
        

    <!-- logout js  -->
    <script>
        function userLogout() {
            // Set login state to false
            localStorage.setItem('isLoggedIn', 'false');
            // Redirect to home page
            window.location.href = 'index.html'; // Change 'index.php' to your actual home page URL
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>