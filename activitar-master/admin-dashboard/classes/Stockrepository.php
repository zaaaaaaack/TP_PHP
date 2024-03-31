 <?php
 include_once '../autoload.php';

 class Stockrepository extends Repository {
     public function __construct() {
         parent::__construct("stock");
     }



        public function update($id, $name, $description, $img,$price,$quantity,$category) {
            // Update database
            $sql="UPDATE stock SET name=?, description=?, img=?, price=?, quantity=?, category=? WHERE id=?";
            
            try{
                $result = $this->bdd->prepare($sql);
                $result->execute([$name, $description, $img, $price, $quantity, $category, $id]);
                header("location: sindex.php");
                exit;
                
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
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