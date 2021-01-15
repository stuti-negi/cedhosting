$(document).ready(function(){
    // create category
$("#create_category").click(function(){
   var name= $("#cat_name").val();
   var link= tinyMCE.activeEditor.getContent();
//    alert(name +" i am in "+ link);
       if((name=="")||(link=="")){
           alert('enter the values');
       }
       else
    {    
        $.ajax({
        url:"../../logics/userhelper.php",
        method:"POST",
        data:{
            case:'c',
            name:name,
            link:link,
        },
        success:function(data)
        {
            if(data=='1')
            {alert('category added sucessfully');
        window.location.replace("dashboard.php");}
            else{
                alert(data);
            }
        },
       });
    }
});
// data table function
$("#datatable").dataTable({
    "ajax":{
                 "url":"../../logics/userhelper.php",
                 "dataSrc" :""
             },
             "columns" :[
                 {"data":"id"},
                 {"data":"prod_parent_id"},
                 {"data":"prod_name"},
                 {"data":"prod_available"},
                 {"data":"prod_link"}

             ]
});
});
