<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/styleSignUp.css" />
    <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Sign up</span>
            </div>
            <form action="register.php" method="POST">
                <div class="row">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="row">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" placeholder="Phone" name="phone" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name ="password" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name ="password2" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Sign up" name="signup">
                </div>
                <div class="login-link">
                    Already have an account? <a href="login.php">Login now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
