    <?php

    


    include_once '../autoload.php';
    $bdd=ConnexionBD::getInstance();

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $sql="DELETE from users where id=$id";
        $bdd->query($sql);
    }

    header("location: cindex.php");
    exit;

    ?>

