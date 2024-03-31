
<?php
require_once "../../loginFunctions.php";
checkLoggedInAsUser();
checkNotLoggedIn();

include_once '../autoload.php';
$formrepository=new formRepository();
$texts=$formrepository->getAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar Begins -->
        <?php
        $firstlink = "findex.php";
        $secondlink= "../clients/cindex.php";
        $thirdtlink= "../stock/sindex.php";
        $lasttlink = "../../deconnexion.php";
        require '../sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
        <div class="container"></div>
            <h2>Your Messages</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($texts as $text){
                    ?>
                    <tr>
                    <tr>
                        <td><?= $text->id ?></td>
                        <td><?= $text->name ?></td>
                        <td><?= $text->email ?></td>
                        <td><?= $text->message ?></td>
                        <td>
                            <a href="delete.php?id=<?= $text->id; ?>" class="btn btn-danger btn-sm">Delete</a>
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