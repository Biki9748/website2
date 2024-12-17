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
    }

    .container {
        display: flex;
        margin: 20px;
    }

    /* profile.html view section  */
    .profile .profile-content {
        flex: 1;
        margin: 0 20px;
        padding: 40px;
        background-color: white;
    }

    .profile .profile-content h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .profile .profile-details {
        margin-bottom: 20px;
    }

    .profile .profile-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #eee;
    }

    .profile .label {
        font-weight: 500;
    }

    .profile .value {
        color: #777;
    }

    .profile .edit-input {
        display: none;
        width: 60%;
        padding: 5px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .profile .edit-input:focus {
        border-color: cadetblue;
    }

    /* Edit button styles */
    .profile .edit-button,
    .save-button {
        display: block;
        width: 100px;
        margin: 20px auto 0;
        padding: 10px 20px;
        background-color: cadetblue;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
    }

    .profile .edit-button:hover,
    .save-button:hover {
        background-color: #284445;
    }

    .profile .save-button {
        display: none;
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
                        <a class="nav-link active" href="#"><i class="fa-solid fa-book"></i> My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favourite.php"><i class="fa-solid fa-heart"></i> Favourite</a>
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
                <main class="profile-content">
                    <h2>Profile Details</h2>
                    <div class="profile-details">
                        <div class="profile-row">
                            <span class="label">Full Name</span>
                            <span class="value" id="fullNameText">- enter name -</span>
                            <input type="text" class="edit-input" id="fullNameInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Mobile Number</span>
                            <span class="value" id="mobileNumberText">- enter number -</span>
                            <input type="text" class="edit-input" id="mobileNumberInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Email ID</span>
                            <span class="value" id="emailText">- not added -</span>
                            <input type="email" class="edit-input" id="emailInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Gender</span>
                            <span class="value" id="genderText">- option -</span>
                            <select class="edit-input" id="genderInput">
                                <option value="FEMALE">FEMALE</option>
                                <option value="MALE">MALE</option>
                                <option value="OTHER">OTHER</option>
                                <option value="PREFER NOT TO SAY" selected>PREFER NOT TO SAY</option>
                            </select>
                        </div>
                        <div class="profile-row">
                            <span class="label">Date of Birth</span>
                            <span class="value" id="dobText">- not added -</span>
                            <input type="date" class="edit-input" id="dobInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Location</span>
                            <span class="value" id="locationText">- not added -</span>
                            <input type="text" class="edit-input" id="locationInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Alternate Mobile</span>
                            <span class="value" id="altMobileText">- enter alternate number -</span>
                            <input type="text" class="edit-input" id="altMobileInput" value="">
                        </div>
                        <div class="profile-row">
                            <span class="label">Hint Name</span>
                            <span class="value" id="hintNameText">- enter hint name -</span>
                            <input type="text" class="edit-input" id="hintNameInput" value="">
                        </div>
                    </div>
                    <button class="edit-button" id="editButton">Edit</button>
                    <button class="save-button" id="saveButton">Save</button>
                </main>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const editButton = document.getElementById("editButton");
            const saveButton = document.getElementById("saveButton");
            const profileRows = document.querySelectorAll(".profile-row");

            function saveToLocalStorage() {
                profileRows.forEach(row => {
                    const input = row.querySelector(".edit-input");
                    const valueSpan = row.querySelector(".value");
                    localStorage.setItem(valueSpan.id, input.value);
                });
            }

            function loadFromLocalStorage() {
                profileRows.forEach(row => {
                    const input = row.querySelector(".edit-input");
                    const valueSpan = row.querySelector(".value");
                    const savedValue = localStorage.getItem(valueSpan.id);
                    if (savedValue) {
                        valueSpan.textContent = savedValue;
                        input.value = savedValue;
                    }
                });
            }

            loadFromLocalStorage();

            editButton.addEventListener("click", function () {
                profileRows.forEach(row => {
                    row.querySelector(".value").style.display = "none";
                    row.querySelector(".edit-input").style.display = "block";
                });
                editButton.style.display = "none";
                saveButton.style.display = "block";
            });

            saveButton.addEventListener("click", function () {
                profileRows.forEach(row => {
                    const input = row.querySelector(".edit-input");
                    const valueSpan = row.querySelector(".value");
                    valueSpan.textContent = input.value;
                    valueSpan.style.display = "block";
                    input.style.display = "none";
                });
                saveToLocalStorage();
                editButton.style.display = "block";
                saveButton.style.display = "none";
            });
        });
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
            window.location.href = 'index.html'; // Change 'index.html' to your actual home page URL
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>