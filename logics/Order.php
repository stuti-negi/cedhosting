<?php
// include 'Product.php';
// $product=new Product();
// // $data=$product->select();

//  $arr=$product->showProductTable();

// $rows=$arr->num_rows;
// for($i=0;$i<$rows;$i++)
// {
//     $a=$arr->fetch_assoc();
//     // echo "<BR>".$a['prod_link']." : ".$a['prod_name'];
//     $res[$i]['name']=$a['prod_name'];
//     $res[$i]['parent']=$a['prod_parent_id'];
//     $res[$i]['available']=$a['prod_available'];
//     $res[$i]['launchDate']=$a['prod_launch_date'];
//     $res[$i]['link']=$a['prod_link'];
// }

// echo "<pre>";
// echo json_encode($res);
// echo "</pre>";
include_once 'Product.php';
$product=new Product();
$arr=$product->showallProducts();
// $row= array();
// while($rows=$arr->fetch_array(MYSQLI_ASSOC))
// {
//     $row[]=$rows;
//    $a=json_decode($rows['html']);
//     $row[]=array("id"=>$rows['id'],
//     "prod_parent_id"=>$rows['prod_parent_id'],
//      "prod_name"=>$rows['prod_name'],
//     "prod_available"=>$rows['prod_available'],
//  "Bandwidth"=>$a->bandwidthin,
// "Webspace"=>$a->webspacein,
// "Freedomain"=>$a->freedomain,
// "Language"=>$a->language,
// "Mailbox"=>$a->mailbox,
// "Pageurl"=>$a->pageurl);
// }


// echo "<pre>";
// echo print_r($row);
// echo "</pre>";

           
?>  
