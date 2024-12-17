<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        body {
            background: url("https://image.freepik.com/free-vector/documents-library-archive-interior-isometric-illustration_1284-8608.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-box {
            background: rgba(255, 255, 255, 0.01);
            backdrop-filter: blur(15px);
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            color: #fff;
        }

        .form-box h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .form-box .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .form-box .input-box input {
            width: 100%;
            height: 45px;
            background: transparent;
            border: none;
            border-bottom: 2px solid #fff;
            padding: 0 40px 0 10px;
            color: #fff;
            font-size: 16px;
        }

        .form-box .input-box i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #fff;
        }

        .form-box input::placeholder {
            color: #fff;
        }

        .btn-custom {
            color: #fff;
            background: #5F9EA0;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            outline: none;
            border: none;
            font-size: 17px;
            cursor: pointer;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.5);
        }

        .group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .group a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .group a:hover {
            text-decoration: underline;
            color: white;
            font-weight: 700;
        }

        #result {
            color: red;
            font-weight: 600;
            margin-top: 20px;
        }

        .popup {
            background-color: #fff;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform .4s, top .4s;
            visibility: hidden;
            text-align: center;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            color: #000;
        }

        .popup ion-icon {
            color: #00ff00;
            font-size: 50px;
            margin: 20px 0;
        }

        .popup button {
            width: 100%;
            background: #00ff00;
            padding: 10px 0;
            margin-top: 20px;
            border: none;
            outline: none;
            font-size: 18px;
            color: #000;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
        }

        .open-slide {
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
            visibility: visible;
        }

        .popup h2 {
            font-weight: 500;
            font-size: 28px;
            margin: 20px 0 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill" onsubmit="return validation()">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="CPassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn-custom" value="Register">
                </div>
                <div class="group">
                    <span><a href="#">Forget Password</a></span>
                    <span><a href="login.php"><h5>Login</h5></a></span>
                </div>
            </form>
        </div>
    </div>

    <div class="popup" id="popup">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <h2>Thank You</h2>
        <p>You were Registered Successfully. Thanks!</p>
        <a href="login.php"><button onclick="CloseSlide()">OK</button></a>
    </div>

    <script>
        function validation() {
            var username = document.Formfill.Username.value;
            var email = document.Formfill.Email.value;
            var password = document.Formfill.Password.value;
            var cPassword = document.Formfill.CPassword.value;

            if (username == "") {
                document.getElementById("result").innerHTML = "Enter Username*";
                return false;
            } else if (username.length < 8) {
                document.getElementById("result").innerHTML = "At least Eight letters*";
                return false;
            } else if (email == "") {
                document.getElementById("result").innerHTML = "Enter your Email";
                return false;
            } else if (password == "") {
                document.getElementById("result").innerHTML = "Enter Password";
                return false;
            } else if (password.length < 6) {
                document.getElementById("result").innerHTML = "Password must be 6-digits";
                return false;
            } else if (cPassword == "") {
                document.getElementById("result").innerHTML = "Enter Confirm Password";
                return false;
            } else if (cPassword !== password) {
                document.getElementById("result").innerHTML = "Password doesn't match";
                return false;
            } else {
                localStorage.setItem('registeredEmail', email);
                localStorage.setItem('registeredPassword', password);

                document.getElementById('popup').classList.add("open-slide");
                return false;
            }
        }

        function CloseSlide() {
            document.getElementById('popup').classList.remove('open-slide');
        }
    </script>
</body>

</html>
