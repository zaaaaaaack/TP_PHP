
<?php
include_once '../autoload.php';
require_once "../../loginFunctions.php";
checkLoggedInAsUser();
checkNotLoggedIn();



$usersrepository=new UsersRepository();
$users=$usersrepository->getAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar Begins -->
        <?php
        $firstlink = "../contactform/findex.php";
        $secondlink= "cindex.php";
        $thirdtlink= "#";
        $lasttlink = "../../deconnexion.php";
        include '../sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
        <div class="container"></div>
    <h2>List of users</h2>
    <a href="create.php" class="btn btn-danger" role="button">New user</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach($users as $user){
            ?>
            <tr>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->fullname ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->password ?></td>
                <td><?= $user->date_inscription ?></td>
                <td>
                    <a href="delete.php?id=<?= $user->id; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</body>

</html>