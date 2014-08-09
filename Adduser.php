<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.session.js"></script>
  
  <!--<link rel="stylesheet" href="css/style.css">-->
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript">
 
 
 
    $(document).ready(function(){
       
       $.get("http://localhost/samplereq/getusername.php",function(data){
        
        alert(data);
        $("#selectname").append(data); 
        
    
  
       });
       $.get("http://localhost/samplereq/getlastid.php",function(data){
        
        alert(data);
        $("#Addusertable").append(data);
        
    
  
       });
       
       
    });
    
    
  
    function adduser()
 {
    


  
   
  
     var alias=$("#alias").val();
     var link=$("#linkid").val();
     var status=$("#button").val();
     var note=$("#note").val();
     var fname=$("#fname").val();
     var lname=$("#lname").val();
     var email=$("#email").val();
     var phone=$("#phonenumber").val();
     
     
    
       
     
        
        
        $.post("http://localhost/samplereq/adduserdatabase.php",{'alias':alias,'link':link,'status':status,'note':note,'fname':fname,'lname':lname,'email':email,'phone':phone},function(data){
        
        $("#Addusertable").append(data);
        window.location.reload();
        });
        
        
        
        
       $("#alias").val("");
       $("#linkid").val("");
       $("#button").val("");
       $("#note").val("");
       $("#fname").val("");
       $("#lname").val("");
       $("#email").val("");
       $("#phonenumber").val("");
        
        
        
 }
 
 function deleteuser(id)
 {



$("#row"+id).remove();
$("#selectoption"+id).remove();

$.post("http://localhost/samplereq/deleteuserdatabase.php",{'deleteid':id},function(data){

});
$.get("http://localhost/samplereq/getusername.php",function(data){
        
        alert(data);
        $("#selectname").html("");
        $("#selectname").append(data); 
        
    
  
       });
 }
 
 
 
 
$alias="";
 function selectnamechange($value)
 {
     alert($value);
        $.post("http://localhost/samplereq/showuser.php",{'Alias':$value},function(data){
   data1=data.split("/");
   $("#adduserbutton").css('visibility','hidden');
   $("#updateuserbutton").css('visibility','visible');
   $alias=$value;
   
     $("#alias").val(data1[0]);
     
       $("#linkid").val(data1[5]);
       if(data1[7]=="male")
       {
       $("#button").select(data1[7]);
       }
       else
       {
           $("#button").select("female");
       }
       $("#note").val(data1[6]);
       $("#fname").val(data1[1]);
       $("#lname").val(data1[2]);
       $("#email").val(data1[3]);
       $("#phonenumber").val(data1[4]);  
       
   
});
 }
 
 function Updateuser()
 {
     
     var alias1=$("#alias").val();
     var link1=$("#linkid").val();
     var status1=$("#button").val();
     var note1=$("#note").val();
     var fname1=$("#fname").val();
     var lname1=$("#lname").val();
     var email1=$("#email").val();
     var phone1=$("#phonenumber").val();
     
     $.post("http://localhost/samplereq/updateuser.php",{'id':$alias,'alias':alias1,'fname':fname1,'lname':lname1,'email':email1,'phone':phone1,'linkid':link1,'status':status1,'note':note1},function(data){
        $("#row"+$alias).html(data);
         
     });
      window.location.reload();
     
     
      $("#adduserbutton").css('visibility','visible');
   $("#updateuserbutton").css('visibility','hidden');
   $("#alias").val("");
   $("#linkid").val("");
   $("#button").val("");
   $("#note").val("");
   $("#fname").val("");
   $("#lname").val("");
   $("#email").val("");
   $("#phonenumber").val("");
 }
 
 function pagebutton()
 {
     window.location.href="http://localhost/samplereq/buttonpage.php";
 }
 
  </script>


</head>
<body>
    <h4>Add User-Admin Page</h4>
    
    <div id='Adduserform'>
        <label>Alias: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='alias' id="alias" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="selectname" onchange="selectnamechange(this.value);">
  
</select>
<br/><br />
     <label>Fname: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='fname' id="fname" /><br/><br />
     <label>Lname: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='lname' id="lname" /><br/><br />
     
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='email' id="email" /><br/><br />
     <label>Phone: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='phonenumber' id="phonenumber" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="button" value="Enable" id="button">Enable
<input type="radio" name="button" id="button" value="Disable">Disable<br/><br />
     <label>Linkid: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='linkid' id="linkid" /><br/><br />
     <label>Note: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='note' id="note" /><br/><br />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' id="adduserbutton" value="Add User" onclick="adduser();" /><input type='button' value="Update User" id = "updateuserbutton" onclick="Updateuser();"style="visibility:hidden" />
     
  </div> 
    <div id="button123" style="float: right;"><input type="button" value="Add Buttons" onclick="pagebutton();"/></div>
   
    <table id="Addusertable" style="border-style: solid;
    border-width: 1px;">
        <tr>
            <td>Alias</td>
            <td>Link id</td>
            <td>Status</td>
            <td>Note</td>
        </tr>
    </table>
    

  
</body>
</html>
