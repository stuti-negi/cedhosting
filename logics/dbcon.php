<?php
class dbcon
 {
    public $dbconnect;
    // public $conn;
        function __construct()
        {
            $this->dbconnect = mysqli_connect("localhost","root","","CedHosting");
         } 
         public function connect()
         {
            if(mysqli_connect_errno()){
                echo "failed to connect database" .mysqli_connect_errno();
            }
            else{
                return $this->dbconnect;
            }
        }
}
?>