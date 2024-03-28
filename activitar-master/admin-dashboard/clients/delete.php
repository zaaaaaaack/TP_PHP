    <?php
    session_start();
    include_once '../autoload.php';
    $bdd=ConnexionBD::getInstance();

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $sql="DELETE from clients where id=$id";
        $bdd->query($sql);
    }

    header("location: cindex.php");
    exit;

    ?>

