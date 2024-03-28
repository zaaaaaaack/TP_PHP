<?php
session_start();
include_once '../autoload.php';
$usersrepository=new UsersRepository();

$fullname = "";
$username = "";
$email = "";
$phone = "";
$password = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    list($errorMessage, $successMessage) = $usersrepository->addClient($fullname, $username, $email, $phone, $password);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <title>New Client</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar Begins -->
        <aside id="sidebar">
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="toggle-btn">
                <i class="lni lni-grid-alt"></i>
                <span>esm</span>
            </label>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-customer"></i>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cart-full"></i>
                        <span>Shop</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <!-- Sidebar Ends -->
        <div class="main">
        <div class=" my-5">
        <h2>New Client: </h2>
        <br> <br> <br>
        <?php
         if (!empty($errorMessage)) { 
            echo" <div class='alert alert-warning alert-dismissible fade show' role='alert'> 
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
          </div>";
         } ?>
            
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >Fullname</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="fullname" value="<?php echo $fullname ?>">
                </div>
            </div> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="  <?php echo $username ?> " >
                </div>
            </div> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value=" <?php echo $email ?>">
                </div>
            </div> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="  <?php echo $phone ?> " >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
                </div>
            </div> 

            <?php
            if (!empty($successMessage)) { 
                echo"
                <div class='row mb-3'></div>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'> 
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                        </div>
                    </div>
            </div>";
            } ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit"  class="btn btn-danger">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a  class="btn btn-outline-default" href="cindex.php">Cancel</a>
                </div>
            </div> 
        </form>
    </div>
        </div>
    </div>
</body>

</html>