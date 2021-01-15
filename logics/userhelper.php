<?php


$case=$_POST['case'];
// $case='vutb';

    switch($case)
    {
        case 's':
            include_once 'User.php';
$user=new User();
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $question=trim($_POST['securityquestion']);
        $mobile=trim($_POST['mobile']);
        $answer=trim($_POST['answer']);
        $pswd=trim($_POST['password']);
        $data=$user->insertsignupdetails($email,$name,$mobile,$pswd,$question,$answer);
        // echo $data;
        // echo $name.':'.$email;
        break;
        // -------------for login-----------------------------
        case 'l':
            include_once 'User.php';
$user=new User();
            $email=$_POST['email'];
            $pswd=$_POST['password'];
            // $email="admin@gmail.com";
            // $pswd="admin@123";
            $logindata=$user->detailsonlogin($email);
            if($logindata!="false")
            {
                $row=$logindata->fetch_assoc();
               
                    $psd_db=$row['password'];
                    if($pswd==$psd_db)
                    {
                        echo '1';
                    }
                    else{
                        echo '2';
                    }
                
            }
            else{
                echo '0';
            }
        break;
        case 'c': 
            include_once 'Product.php';
            $product=new Product();   //to create a product
            $name=$_POST['name'];
            $link=$_POST['link'];
            // $name='sssssss';
            // $link='asdfghjk';
            $out=$product->insercategory($name,$link);
            echo $out;
        break;
        case 't':
            include_once 'Product.php';//show table on create category
            $product=new Product();
            $arr=$product->showProductTable();
            $row= array();
            while($rows=$arr->fetch_array(MYSQLI_ASSOC))
            {
                $row[]=$rows;
            }
            echo json_encode($row);
          
        break;
        case 'add':
            include_once 'Product.php';// add a new product
            $product=new Product();
            
            $productcategory=$_POST['productcategory'];
            $productname=$_POST['productname'];
            $pageurl=$_POST['pageurl'];
            $monthlyprice=$_POST['monthlyprice'];
            $annualprice=$_POST['annualprice'];
            $sku=$_POST['sku'];
            $webspace=$_POST['webspace'];
            $bandwidth=$_POST['bandwidth'];
            $freedomain=$_POST['freedomain'];
            $languagetechnology=$_POST['languagetechnology'];
            $mailbox=$_POST['mailbox'];
            $arr=$product->addproduct($productcategory,$productname,$pageurl,
                            $monthlyprice,$annualprice,$sku,$webspace,$bandwidth,
                             $freedomain,$languagetechnology,$mailbox);
                             echo "data insertes successfully";
            
        break;
        case 'vutb':
            include_once 'Product.php';//show table on create category
            $product=new Product();
            $arr=$product->showallProducts();
            echo $arr;
            

    }

