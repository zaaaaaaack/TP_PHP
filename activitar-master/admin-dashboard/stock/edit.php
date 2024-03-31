<?php
session_start();
include_once '../autoload.php';

// Check if ID is provided
if (!isset($_GET['id'])) {
    header("Location: sindex.php");
    exit();
}

$stockRepository = new StockRepository();
$stock = $stockRepository->getById($_GET['id']);

if (!$stock) {
    echo "Product not found.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $img = $stock->img; // Default image path
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];


    // Check if a new image is uploaded
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../clothes/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $img = $target_file; // Update image path if upload successful
        } else {
            echo "Error uploading image.";
            exit();
        }
    }

    // Update product in the database
    try {
        // Update the product
        $stockRepository->update($stock->id, $name, $description, $img, $price, $quantity, $category);
        
        // Redirect back to stock page after successful update
        header("Location: sindex.php");
        exit();
    } catch (Exception $ex) {
        // Handle any exceptions that occur during the update process
        echo "Error updating product: " . $ex->getMessage();
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
            <h2>Edit Product</h2>
            <form action="edit.php?id=<?= $stock->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $stock->name ?>">
                </div>
                
                
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" id="description" name="description" class="form-control" value="<?= $stock->description ?>">
                </div>

                <div class="form-group">
                    <label for="image">Image:</label><br>
                    <img src="<?= $stock->image ?>" alt="Product Image" style="max-width: 200px;"><br>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" class="form-control" value="<?= $stock->price ?>">
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" id="quantity" name="quantity" class="form-control" value="<?= $stock->quantity ?>">
                </div>

                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" class="form-control" value="<?= $stock->category ?>">
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</body>
</html>
