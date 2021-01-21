<?php
 include 'dbcon.php';
class Product extends dbcon
{ 
    public $dbconn;
  function __construct()
   {
       
        $db=new dbcon();
        $this->dbconn=$db->connect();
   } 
    function select()
    {
        $select_query="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1' AND `prod_available`='1'"; 
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
 
    function insercategory($name,$link)//insert in tble product
    {
        $insert_query="INSERT INTO `tbl_product` ( `prod_parent_id`, `prod_name`, `prod_available`, `html`) VALUES ( '1', '$name', '1', '$link')";
        if($this->dbconn->query($insert_query))
        {
   echo 1;
        }else{
            echo 2;
        }
    }
    // to show the  product table in create product in createcategory.php
    function showProductTable()
    {
        $fetch_product="SELECT * FROM `tbl_product` WHERE `tbl_product`.`prod_available`='1'";
        $result=$this->dbconn->query($fetch_product);
        if($result->num_rows>0)
        {
            return $result;
        }
        else
        {
           return "false";
        }
    }
     public function addproduct($productcategory,$productname,$pageurl,
     $monthlyprice,$annualprice,$sku,$webspace,$bandwidth,
      $freedomain,$languagetechnology,$mailbox)
      {
        $datae = array( 
            'webspacein'=> $webspace ,
            'bandwidthin'=> $bandwidth,
            'freedomain'=> $freedomain,
            'language'=> $languagetechnology,
            'mailbox' => $mailbox,
            'pageurl' => $pageurl,); 
          $description=json_encode($datae);
        $insertprod = "INSERT INTO `tbl_product_description`(`prod_id`, 
        `description`, `mon_price`, `annual_price`, `sku`) 
        VALUES ('$productcategory','$description','$monthlyprice','$annualprice','$sku')";
        $this->dbconn->query($insertprod);
         $insertagain =  "INSERT INTO `tbl_product`( `prod_parent_id`, `prod_name`, `prod_available`,`html`) 
         VALUES ($productcategory,'$productname','1','$description')";
         $this->dbconn->query($insertagain);
      }
      
public function showallProducts() 
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        $data=$this->dbconn->query($sql);
        $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspacein'};
            $bandwidth=$decoded_description->{'bandwidthin'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'language'};
            $mailbox=$decoded_description->{'mailbox'};
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
            $roww=$this->dbconn->query($sql);
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['html'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox);
        }
        return json_encode($arr);
    
    }
public function prodDetails($id)
{
    $sql="SELECT * FROM `tbl_product_description` WHERE `prod_id`=$id";
    $data=$this->dbconn->query($sql);
     $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
           
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspacein'};
            $bandwidth=$decoded_description->{'bandwidthin'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'language'};
            $mailbox=$decoded_description->{'mailbox'};
            $url=$decoded_description->{'pageurl'};
           
            $arr['data'][]=json_encode(array($row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox,$url,$row['id']));
            json_encode($arr);
        }
        echo json_encode($arr);

}
public function cartProducts($id,$plan) 
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` where `tbl_product_description`.`id`='$id'";
        $data=$this->dbconn->query($sql);
        $arr=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspacein'};
            $bandwidth=$decoded_description->{'bandwidthin'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'language'};
            $mailbox=$decoded_description->{'mailbox'};
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
            $roww=$this->dbconn->query($sql);
            $data1=$roww->fetch_assoc();
            if($plan=="annual"){
                $arr[]=array('id'=>$row['id'],'prod_name'=>$data1['prod_name'],'prod_name'=>$row['prod_name'],'avalibilty'=>$available,'price'=>$row['annual_price'],'sku'=>$row['sku'],'webspace'=>$webspace,'bandwidth'=>$bandwidth,'freedomain'=>$freedomain,'languagetechnology'=>$languagetechnology,'mailbox'=>$mailbox);
            }else{
                $arr[]=array('id'=>$row['id'],'prod_name'=>$data1['prod_name'],'prod_name'=>$row['prod_name'],'avalibilty'=>$available,'price'=>$row['mon_price'],'sku'=>$row['sku'],'webspace'=>$webspace,'bandwidth'=>$bandwidth,'freedomain'=>$freedomain,'languagetechnology'=>$languagetechnology,'mailbox'=>$mailbox);
            }
            
        }
        return json_encode($arr);
    }

}
// $db1=new Product();
// $db1->cartProducts(2);
// $db1->prodDetails(2);
?>