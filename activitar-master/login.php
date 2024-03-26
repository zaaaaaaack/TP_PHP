<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css" />
    <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Login</span>
            </div>
            <form action="login.php" method="post">
                <div class="row">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Log in">
                </div>
                <div class="signup-link">
                    Not a member? <a href="register.php">Signup now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
