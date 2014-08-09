<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.session.js"></script>
  
  <!--<link rel="stylesheet" href="css/style.css">-->
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript">
 var gloval;
    $(document).ready(function(){
      
       $.get("http://localhost/samplereq/getusername.php",function(data){
        
      
        $("#selectname").append(data); 
        gloval=$("#selectname").val(); 
    
      
        
       });
       
     
      
       
       
       
       
    });
 valadd="";
 function selectnamechange(value1)
 {
     gloval=value1;
   alert(value1);
   $("#selectnamebutton").html(""); 
   $.post("http://localhost/samplereq/buttondata.php",{'select':value1},function(data){
   $("#selectnamebutton").append(data); 
        }); 
   $("#Addbuttontable").html("");
        $.post("http://localhost/samplereq/buttonimageget.php",{'select':value1},function(data){
        
        
        $("#Addbuttontable").append(data); 
        
    
  
       });  
       
       
     
        
 }
 
function addbuttoninfo()
{
var valadd=$("#selectname").val();
var name=$("#buttonname").val();
var url=$("#buttonaddurl").val();
var caption=$("#buttoncaption").val();
$.post("http://localhost/samplereq/addbutton.php",{'id1':valadd,'name':name,'url':url,'caption':caption},function(data){
$("#selectnamebutton").append(data);    
});
$("#buttonname").val("");
$("#buttonaddurl").val("");
$("#buttoncaption").val("");
 }
  $(document).ready(function(){
  $("#buttonupload").submit(function(){
  value=$("#file").val();
     value1=value.split("\\");
     value2="image/"+value1[2];
     window.sessionStorage['value2']=value2;
     window.sessionStorage['value3']=$("#selectnamebutton").val();
    });
  });  
 function addbuttonimage()
 {
   imageval=window.sessionStorage['value2'];  
   imageval1=window.sessionStorage['value3'];
   imageval1;
   imageval;
   $.post("http://localhost/samplereq/buttonimage.php",{'idval':imageval1,'image':imageval},function(data){
      $("#Addbuttontable").append(data); 
      
   });
   window.location.reload();
   delete(window.sessionStorage['value2']); 
   delete(window.sessionStorage['value3']);
 }
 function addurlvalue()
 {  var valadd=$("#selectname").val();
     var valbutton=$("#selectnamebutton").val();
     var url=$("#addurltext").val();
     var caption=$("#captiontext").val();
    $.post("http://localhost/samplereq/urladdpagedb.php",{'iduser':valadd,'idbutton':valbutton,'url':url,'caption':caption},function(data){
       $("#buttoncaption").append(data);
    });
    $("#addurltext").val("");
    $("#captiontext").val("");
 }
 var valuloc;
 function selectnamechangebutton(value)
 {
     valueloc=value;
        $("#buttoncaption").html("");  
         $.post("http://localhost/samplereq/urladdpagedb1.php",{'iduser':gloval,'idbutton':value},function(data){
        
         $("#buttoncaption").append(data);  
       });
       
 }
 var val3;
 function buttoncaptionclick(value3)
 {
    val3=value3;
$.post("http://localhost/samplereq/urladdpagedb2.php",{'iduser':gloval,'idbutton':valueloc,'id':value3},function(data){
    data1=data.split("/");
    $("#addurltext").val(data1[0]);
    $("#captiontext").val(data1[1]);
})
}
function deleteurlvalue()
{
 $("#buttoncaption").html("");  
        $.post("http://localhost/samplereq/urladdpagedb3.php",{'iduser':gloval,'idbutton':valueloc,'id':val3},function(data){
  
});
$("#addurltext").val("");
    $("#captiontext").val("");

}
function buttondelete(value5)
{
   $.post("http://localhost/samplereq/deletebutton.php",{'id1':gloval,'id':value5},function(data){
  
});  
    
}
 
  </script>


</head>
<body>
     <div id='Adduserform'>
<select id="selectname" onchange="selectnamechange(this.value);">
</select><br/>
<label>Button Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='buttonname' id="buttonname" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="selectnamebutton" onchange="selectnamechangebutton(this.value);"></select><br/><br />
<label>Add Url: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='buttonaddurl' id="buttonaddurl" /><br/><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="addurldiv" style="float: right"><label>Add Url:</label><input type="text" id="addurltext"><br/><label>Caption</label><input type="text" id="captiontext"><br/><input type="button" value="add url" onclick="addurlvalue();"><input type="button" value="delete url" onclick="deleteurlvalue();"></div><br/><br />
<label>Url: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<select name='buttoncaption' id="buttoncaption" onchange="buttoncaptionclick(this.value);"></select><br/><br />
<!--<input type="button" name="submit" value="Add Button" style="background: url(image/galao_kaffee_portugal.jpg); width:100px; height:25px;" /><br/><br/>-->
<input type="button" name="submit" value="Add Button" onclick="addbuttoninfo();" /><br/><br/>
</div> 
 <form action="upload_file.php" method="post" id="buttonupload"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>       
 <input type="button" name="submit" value="Add Button image" onclick="addbuttonimage();" /><br/><br/>   
  <table id="Addbuttontable" style="border-style: solid;
    border-width: 1px;">
        <tr>
            <td>    </td>
            <td>Button name|</td>
            <td>Button image</td>
          </tr>
    </table>
  
</body>
</html>
