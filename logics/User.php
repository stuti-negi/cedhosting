<?php
class User
{ 
    public $dbconn;
  function __construct()
   {
        include 'dbcon.php';
        $db=new dbcon();
        $this->dbconn=$db->connect();
   } 
    function insertsignupdetails($mail,$name,$number,$password,$question,$answer)
    {
       $insert_query="INSERT INTO `tbl_user`( `email`, `name`, `mobile`, 
       `email_approved`, `phone_approved`, `active`, `is_admin`, 
        `password`, `security_question`, `security_answer`)
        VALUES ('$mail','$name','$number','1','1','1','0','$password','$question','$answer')"; 
        if($this->dbconn->query($insert_query)===true)
        {
            echo "1";
        }
        else
        {
           echo "0";
        }
    }  
    function detailsonlogin($mail)
    {
       $select_query="SELECT * FROM `tbl_user` WHERE `email`='$mail' "; 
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
}
// $obj=new User();

?>