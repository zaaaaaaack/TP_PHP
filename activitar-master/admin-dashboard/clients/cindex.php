
<?php
session_start();
include_once '../autoload.php';
$bdd=ConnexionBD::getInstance();
$query="SELECT * FROM clients";
$response=$bdd->query($query);
$clients=$response->fetchAll( PDO::FETCH_ASSOC);
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
        <aside id="sidebar">
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="toggle-btn">
                <i class="lni lni-grid-alt"></i>
                <span>esm</span>
            </label>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="../index.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="cindex.php" class="sidebar-link">
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
        <div class="container"></div>
    <h2>List of clients</h2>
    <a href="create.php" class="btn btn-danger" role="button">New Client</a>
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
            
            foreach($clients as $client){
            ?>
            <tr>
                <td><?php echo $client["id"]?></td>
                <td><?php echo $client["full_name"]?></td>
                <td><?php echo $client["username"]?></td>
                <td><?php echo $client["email"]?></td>
                <td><?php echo $client["phone"]?></td>
                <td><?php echo $client["password"]?></td>
                <td><?php echo $client["created_at"]?></td>
                <td>
                <a href="delete.php?id=<?php echo $client['id']; ?>" class="btn btn-danger btn-sm">Delete</a>


                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</body>

</html>