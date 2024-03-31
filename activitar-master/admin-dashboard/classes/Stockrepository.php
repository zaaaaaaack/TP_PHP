 <?php
 include_once '../autoload.php';

 class Stockrepository extends Repository {
     public function __construct() {
         parent::__construct("stock");
     }

     public function addStock($name, $price,$image) {
         // Add to database
         $sql="INSERT INTO stock(name, price, image)" .
             " VALUES(?, ?, ?)";
         
         try{
             $result = $this->bdd->prepare($sql);
             $result->execute([$name, $price, $image]);
             header("location: sindex.php");
             exit;
             
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
     }

        public function update($id, $name, $price, $image) {
            // Update database
            $sql = "UPDATE stock SET name=?, price=?, image=? WHERE id=?";
            $result = $this->bdd->prepare($sql);
            $result->execute([$name, $price, $image, $id]);
            header("location: ../stock/sindex.php");
            exit;
        }

        public function getById() {
            $id = $_GET['id'];
            $sql = "SELECT * FROM stock WHERE id=?";
            $result = $this->bdd->prepare($sql);
            $result->execute([$id]);
            return $result->fetch((PDO::FETCH_OBJ));
        }
     
    } 
?>