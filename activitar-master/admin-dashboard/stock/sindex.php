
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
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

    <div class="main" >
    <table class="table" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th>description</th>
                <th>image</th>
                <th>price</th>
                <th>quantity</th>
                <th>category</th>
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
                <td><?= $stock->description ?></td>
                <td><img src="<?= $stock->img ?>" alt="<?= $stock->name ?>" style="max-width: 100px;"></td>
                <td><?= $stock->price ?></td>
                <td><?= $stock->quantity ?></td>
                <td><?= $stock->category ?></td>

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
            </div>
    
</body>

</html>