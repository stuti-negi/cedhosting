<?php
include 'User.php';
$user=new User();
$case=$_POST['case'];
// $case='l';
// if(isset($_POST['SIGNUP']))
// {
    switch($case)
    {
        case 's':
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $question=trim($_POST['securityquestion']);
        $mobile=trim($_POST['mobile']);
        $answer=trim($_POST['answer']);
        $pswd=trim($_POST['password']);
        $data=$user->insertsignupdetails($email,$name,$mobile,$pswd,$question,$answer);
        // echo $name.':'.$email;
        break;
        // -------------for login-----------------------------
        case 'l':
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
    }

// }