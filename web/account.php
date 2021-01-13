<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<style>/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

/* Firefox */
input[type=number] {
-moz-appearance: textfield;
}</style>
<!--script-->
</head>
<body>
	<!---header--->
	<?php include "header.php";?>
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
	<!-- <div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password">
							 </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div> -->
	<div class="main-1">
        <div class="container">
            <div class="register">
                <form method="post" > 
                <!-- onsubmit="return(validateForm());" -->
                    <div class="register-top-grid">
                    <h3>personal information</h3>
                        <h5 class="error-msg">* mandatory fields</h5>
                        <div>
                            <span>Name<label>*</label></span>
                            <input type="text" name="name" id="name" data-validation-regexp="^([a-zA-Z\s]{3,})$"	 required> 
                        </div>
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" id="email" required> 
                        </div>
                        <div>
                            <span>Security Question<label>*</label></span>
                            <select id="security-question" name="securityquestion"> 
                                <option value="Please select security question">Please select security question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select>
                        </div>
                        <div>
                            <span>Mobile  (minimum 10 digits required)<label>*</label></span>
                            <input type="number" name="mobile" id="mobile" required> 
                        </div>
                        <div id="answer-signup">
                            <span>ANSWER<label>*</label></span>
                            <input type="text" name="answer" id="answer"> 
                        </div>
                        <div class="clearfix"> </div>
                        <a class="news-letter" href="#">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                        </a>
                        </div>
                        <div class="register-bottom-grid">
                            <h3>login information</h3>
                                <div>
                                <span>Password<label>*</label></span>
                                <input type="password" name="password" id="password" required>
                                <span id="error-password"> (Password should be atleast one upper case one lower case (min-8 characters))</span>
                                </div>
                                <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" name="repassword" id="repassword" required>
                                </div>
                        </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                        <input type="submit" value="submit" name="SIGNUP" id="signup">
                        <div></div>
                        <div class="error-msg"></div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
            </div>
    <!-- </div> -->
<!-- registration -->

			</div>
<!-- login -->
				<!---footer--->
				<?php include "footer.php";?>
			<!---footer--->
			<script>
            $(document).ready(function(){
				var invalidchars=['+','-','%','^','&','$','#','!','~','(',')','*','='];
				$('#email').on("keydown",function(e){
					if (invalidchars.includes(e.key)) {
     							   e.preventDefault();
	      					 }
							});
					// 		$('#name').on("keydown",function(e){
					// 			// console.log(e.keyCode);
					// if ((e.keyCode<48 || e.keyCode>57)) {
     				// 			   e.preventDefault();
	      			// 		 }
					// 		});
                //   mobile number validation
							$('#mobile').on("keydown",function(e){
								// console.log(e.keyCode);
                                if(e.keyCode==8){
                                return true;
	      					 }
					
                               else if ((e.keyCode<48) || (e.keyCode>57)) {
     							   e.preventDefault();
	      					 } 
                               
                               else{return true;}
							});
		 $('#security-question').click(function(){
            var value=$(this).val();
            if (value!="Please select security question")
            {
                $('#answer-signup').show();
            }
            else{
                $('#answer-signup').hide();
            }
        });
        $('#password').focus(function(){
            $('#error-password').show().fadeOut(7000);
        });
        // function validateForm(){
        //     var name=($('#name').val()).trim();
        //     var email=($('#email').val()).trim();
        //     var mobile=($('#mobile').val()).trim();
        //     var security_question=($('#security-question').val()).trim();
        //     var answer=($('#answer').val()).trim();
        //     var password=($('#password').val()).trim();
        //     var repassword=($('#repassword').val()).trim();
        //     var regName=/^([a-zA-Z]+\s?)*$/;
        //     var regPassword=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
        //     var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
        //     var regEmail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
        //     if (name=="" || email=="" || mobile=="" || security_question=="" || answer=="" || password=="" || repassword=="") {
        //         alert("all fields are mandatory including security question and answer kindly choose one question and answer that!");
        //         return false;
        //     }
        //     else if (!(name.match(regName))){
        //         alert("Please enter valid name");
        //         return false;
        //     }
        //     else if (!(password.match(regPassword))) {
        //         alert("password criteria does not matched");
        //         return false;
        //     }
        //     else if (!(email.match(regEmail))) {
        //         alert("email criteria doesn't match");
        //         return false;
        //     }
        //     else if (!(mobile.match(regMobile))) {
        //         alert("Please enter valid mobile number");
        //         return false;
        //     }
        //     else if (password!=repassword) {
        //         alert("please enter same password and repassword");
        //         return false;
        //     }
        //     else if (!isNaN(answer)) {
        //         alert("please enter valid answers i.e, only digits are not allowed");
        //         return false;
        //     }
        //     return true;
        // }
$('#signup').click(function(){
            var name=$('#name').val();
            var email=$('#email').val();
            var mobile=$('#mobile').val();
            var security_question=$('#security-question').val();
            var answer=$('#answer').val();
            var password=$('#password').val();
            $.ajax({
               url:"../logics/userhelper.php",
               method:"POST",
               data:{
                   case:'s',
                   name:name,
                   email:email,
                   securityquestion:security_question,
                    mobile:mobile,
                    answer:answer,
                    password:password,
               },
               success:function(data){
                if(data=='1')
                {
                    alert("sign up sucessfull");
                    window.location.replace("login.php");
                }
                else{
                    alert("sign up failed");
                }
               },
            });
});
});
			</script>
</body>
</html>