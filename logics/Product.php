<?php
class Product
{ 
    public $dbconn;
  function __construct()
   {
        include 'dbcon.php';
        $db=new dbcon();
        $this->dbconn=$db->connect();
   } 
    function select()
    {
        $select_query="SELECT `prod_name` FROM `tbl_product` WHERE `prod_parent_id`='1' AND `prod_available`='1'"; 
       $result=$this->dbconn->query($select_query);
        if($result->num_rows>0)
        {
            return $result;
        }
        else
        {
           return "false";
        }
    }  
    // function detailsonlogin($mail)
    // {
      
    // }  
}
// $obj=new User();

?>