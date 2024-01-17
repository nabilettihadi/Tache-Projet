<?php
class Db {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'task'; 
    public function connect(){
        try {
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
               
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
               
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   
                return $conn;
              
             
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
    }
}
?>

