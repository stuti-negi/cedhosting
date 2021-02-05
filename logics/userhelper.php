<?php
session_start();

$case=$_POST['case'];
// $case='cartt';

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
                       
                        if($row['active']=="1")
                        {
                            echo '1';//active user
                        $_SESSION['userid']=$row['id'];
                        $_SESSION['usermail']=$row['email'];
                        $_SESSION['username']=$row['name'];
                        $_SESSION['isAdmin']=$row['is_admin'];
                        }
                        else{
                            echo '-1';//inactive user
                        }
                    }
                    else{
                        echo '2';//pawrd not match
                    }
                
            }
            else{
                echo '0';//email doesn't exist
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
          
        break;
        case 'add':
            include_once 'Product.php';// add a new product
            $product=new Product();
    
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
        break;
        case 'pdetails':
            $id=$_POST['id'];
            include_once 'Product.php';//show product details on hosting.php
            $product=new Product();
            $json=$product->prodDetails($id);
            echo $json;
        break;
        case "addtocart":
            $p=$_POST['plan'];
			$id=$_POST['itemid'];
            include_once 'Product.php';//fetch product details to add on cart
            $product=new Product();
            $json=$product->cartProducts($id,$p);
            
            $arr=json_decode($json,true);
      
            $arr[0]+=["count"=>"1"];
            // $_SESSION['cart'][]=array("$k"=>$arr[0]);
            $_SESSION['cart']['data'][]=$arr[0];
           

        break;
        case 'cartt':
            if(isset($_SESSION['cart']))
                {
                    $arr=($_SESSION['cart']);
                    echo(json_encode($arr));
                }
                else
                {
                    header('location: ../index.php');
                    echo "<script>alert('cart is empty');</script>";
                }
            break;

    }

