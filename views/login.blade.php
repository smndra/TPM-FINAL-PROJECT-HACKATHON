<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/plugin/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <h1>Logo</h1>

        <nav class="navbar">
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Prizes</a></li>
            <li><a href="#">Jury & Mentor</a><li>
            <li><a href="#">About</a><li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Timeline</a></li>
            </ul>
        </nav>
        <a href="/login" class="loginbtn">Login</a>
    </header>
    
    <div class="wrapper"> 
        <h1>Welcome Back</h1>  
        <h2>Please log in your account</h2>
        <form action="/dashboard" method="POST" id="loginform">
            @csrf 
            <div class="input-box">
                <input type="email" id="UEmail" name="email" placeholder="Username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="UPass" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password</a>
            </div>

            <div class="btn">
                <button type="submit" id="submit" class="login">Login</button>
                <a href="/registration">Create Account</a>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginForm = document.getElementById("loginform");
            const loginButton = document.getElementById("submit");

            loginButton.addEventListener("click", (e) => {
                
                const username = document.getElementById("UEmail").value;
                const password = document.getElementById("UPass").value;

                if (username.trim() === "" || password.trim() === "") {
                    alert("Please enter both email and password.");
                    e.preventDefault();
                }

                loginForm.submit(); 
            });
        });
    </script>


</body>
</html>