$(document).ready(function(){
$('#login').click(function(){
    // var name=$('#name').val();
    var email=$('#lemail').val();
    var password=$('#lpassword').val();
    console.log(email);
    $.ajax({
       url:"logics/userhelper.php",
       method:"POST",
       data:{
           case:'l',
           email:email,
            password:password,
       },
       success:function(data){
        if(data=='1')
        {
            alert("Logged in successfully");
            window.location.replace("admin/examples/dashboard.php");
        }
        else if(data=='2'){
            alert("Logged in failed password didn't match");
        }
        else if(data=='0'){
            alert("no such data found");
        }
        else{
            alert("error");
        }
       },
    });
});




});