
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    background: url("https://image.freepik.com/free-vector/documents-library-archive-interior-isometric-illustration_1284-8608.jpg") no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 100vh;
    width: 100%;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.form-box{
    background: rgba(255, 255, 255, 0.01);
    backdrop-filter: blur(15px);
    padding: 20px;
    border: 2px solid #fff;
    border-radius: 20px;
    width: 100%;
    max-width: 400px;
    color: #fff;
}

.form-box h2{
    color: #fff;
    text-align: center;
    font-size: 32px;
}

.form-box .input-box{
    position: relative;
    margin-bottom: 20px;
}

.form-box .input-box input{
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

.group{
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

.popup{
    width: 400px;
    background-color: #fff;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform .4s , top .4s;
    visibility: hidden;
    text-align: center;
    padding: 0 30px 30px;
    height: 330px;
    color: #000;
}

.popup ion-icon{
    color: #00ff00;
    font-size: 50px;
    margin: 20px 0;
}

.popup button{
    width: 100%;
    background: #00ff00;
    padding: 10px 0;
    margin-top: 50px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #000;
    border-radius: 4px;
    cursor: pointer;
    box-shadow:0 0 0 2px rgba(0,0,0,0.1);
}

.popup a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 2px;
}

.open-slide{
    top: 50%;
    transform: translate(-50%, -50%) scale(1);
    visibility: visible;
}

.popup h2{
    font-weight: 500;
    font-size: 38px;
    margin: 30px 0 10px;
}
</style>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill" onsubmit="return handleLogin(event)"> 
                <h2>Login In</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="Email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="Password" name="Password" placeholder="Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn-custom" value="Login">
                </div>
                <div class="group">
                    <span><a href="register.php">No Account?</a></span>
                    <span><a href="register.php"><h5>Register</h5></a></span>
                </div>
                <div class="group">
                    <span><a href="index.php" style="text-decoration: underline;"><h4>I am Admin</h4></a></span>
                    <span><a href="adminlogin.php"><h5>Login</h5></a></span>
                </div>
                
            </form>
        </div>
    </div>

        <script>
            function handleLogin(event) {
                event.preventDefault();  // Prevent form from submitting the traditional way
        
                let Email = document.getElementById("Email").value;
                let password = document.getElementById("Password").value;
                let result = document.getElementById("result");
        
                // Retrieve the registered credentials from localStorage
                let registeredEmail = localStorage.getItem('registeredEmail');
                let registeredPassword = localStorage.getItem('registeredPassword');
        
                if (Email === registeredEmail && password === registeredPassword) {
                    // Set login state in local storage
                    localStorage.setItem('isLoggedIn', 'true');
        
                    // Redirect to homepage after login
                    window.location.href = "index.html";
                } else {
                    if (Email === registeredEmail && password !== registeredPassword) {
                        document.getElementById("Email").style.border = "1px solid green";
                        document.getElementById("Password").style.border = "1px solid red";
                        result.innerHTML = "Correct Email :) but incorrect Password!";
                    } else if (Email !== registeredEmail && password === registeredPassword) {
                        document.getElementById("Email").style.border = "1px solid red";
                        document.getElementById("Password").style.border = "1px solid green";
                        result.innerHTML = "Incorrect Email! but correct Password :)";
                    } else {
                        document.getElementById("Email").style.border = "1px solid red";
                        document.getElementById("Password").style.border = "1px solid red";
                        result.innerHTML = "Incorrect information!";
                    }
                }
            }
        </script>
</body>
</html>
