
<?php
session_start();
include_once '../autoload.php';
$stockrepository=new StockRepository();
$stocks=$stockrepository->getAll();
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
        $secondlink= "../clients/cindex.php";
        $thirdtlink= "sindex.php";
        $lasttlink= "../logout.php";
        include '../sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
        <div class="container"></div>
    <h2>Your stock</h2>

    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach($stocks as $stock){
            ?>
            <tr>
            <tr>
                <td><?= $stock->id ?></td>
                <td><?= $stock->name ?></td>
                <td><?= $stock->price ?></td>
                <td><img src="<?= $stock->image ?>" alt="<?= $stock->name ?>" style="max-width: 100px;"></td>
                <td>
                    <a href="delete.php?id=<?= $stock->id; ?>" class="btn btn-danger btn-sm">Delete</a>
                    <a href="edit.php?id=<?= $stock->id; ?>" class="btn btn-danger btn-sm">Edit</a>
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