<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
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
$("#datelabelandtime").html();
$("#datelabelandtime").append("<label>Start Time:</label><select id='selectstarttime' onchange='selectstarttime(this.value);'><option value='1'>1:00</option><option value='2'>2:00</option><option value='3'>3:00</option><option value='4'>4:00</option><option value='5'>5:00</option><option value='6'>6:00</option><option value='7'>7:00</option><option value='8'>8:00</option><option value='9'>9:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option><option value='13'>13:00</option><option value='14'>14:00</option><option value='15'>15:00</option><option value='16'>16:00</option><option value='17'>17:00</option><option value='18'>18:00</option><option value='19'>19:00</option><option value='20'>20:00</option><option value='21'>21:00</option><option value='22'>22:00</option><option value='23'>23:00</option></select><label>End Time:</label><select id='selectendtime' onchange='selectendtime(this.value);'><option value='1'>1:00</option><option value='2'>2:00</option><option value='3'>3:00</option><option value='4'>4:00</option><option value='5'>5:00</option><option value='6'>6:00</option><option value='7'>7:00</option><option value='8'>8:00</option><option value='9'>9:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option><option value='13'>13:00</option><option value='14'>14:00</option><option value='15'>15:00</option><option value='16'>16:00</option><option value='17'>17:00</option><option value='18'>18:00</option><option value='19'>19:00</option><option value='20'>20:00</option><option value='21'>21:00</option><option value='22'>22:00</option><option value='23'>23:00</option></select>");
   
    
$.post("http://localhost/samplereq/buttondata.php",{'select':2},function(data){
       $("#selectnamebutton").append(data); 
        });      
 
});     
      
      

 function selectnamechangebutton(value)
 {
   valuesave=value;  
 }
 function show()
 {
    
 }
 function setallbutton()
 {
    
        valueday="Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday";
     alert(valueday);
 }
 //var sundaycount=0;
 function sundaybutton()
 {
   valueday="Sunday";
   alert(valueday);
  
 }
 function mondaybutton()
 {
     valueday="Monday";
     alert(valueday);
 }
 function tuesdaybutton()
 {
     valueday="Tuesday";
     alert(valueday);
 }
 function wednesdaybutton()
 {
     valueday="Wenesday";
     alert(valueday);
 }
 function thursdaybutton()
 {
     valueday="Thursday";
     alert(valueday);
 }
 function fridaybutton()
 {
     valueday="Friday";
     alert(valueday);
 }
 function saturdaybutton()
 {
     valueday="Saturday";
     alert(valueday);
 }
 var startcount=0;
 function startbutton()
 {
    if(startcount%2==0)
    {
        $("#starttext").css('visibility','visible');
    }
    else
    {
       $("#starttext").css('visibility','hidden'); 
    }
        startcount++;
 }
 var endcount=0;
 function endbutton()
 {
     if(endcount%2==0)
    {
        $("#endtext").css('visibility','visible');
    }
    else
    {
       $("#endtext").css('visibility','hidden'); 
    }
        endcount++;
 }
 var selectcount=0;
 function selectredirect(value)
 {
      
 }
 function addallotment()
 {
    selectname=$("#selectnamebutton").val();
    day=valueday;
    selectstarttime=$("#selectstarttime option:selected").text();
    selectendtime=$("#selectendtime option:selected").text();
    selectredirectval=$("#selectredirect option:selected").text();
    message=$("#message").val();
        $.post("http://localhost/samplereq/allotmentadd.php",{'idbutton':selectname,'day':valueday,'starttime':selectstarttime,'endtime':selectendtime,'message':message,'url':selectredirectval},function(data){
           $("#allottable").append(data); 
        });
 }
 function deleteuser(value)
 {
   $.post("http://localhost/samplereq/allotmentdelete.php",{'id':value},function(data){
           alert(data);
           $("#row"+value).remove();
        });  
 }
  </script>


</head>
<body>
    
    
    <div id='allotmentform'>
     <label>Name: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='name' id="name" /><br/><br />
     <label>Contact number: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='phonenumber' id="phonenumber" /><br/><br />
     <label>Email: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='email' id="email" /><br/><br />
     <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="selectnamebutton" onchange="selectnamechangebutton(this.value);"></select>
     
  </div>   
   
    <div class="wrapper" id="wrapperid" style="width: 700px; overflow: hidden;white-space: nowrap;border-style: solid;
    border-width: 1px;">
    <div class="inline" style="display: inline-block;"><input type="button" value="Set all" id="setbutton" name="setbutton" onclick="setallbutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Sunday" id="sundaybutton" name="sundaybutton" onclick="sundaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Monday" id="Mondaybutton" name="Mondaybutton" onclick="mondaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Tuesday" id="Tuesdaybutton" name="Tuesbutton" onclick="tuesdaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Wednesday" id="Wednesdaybutton" name="Wednesdaybutton" onclick="wednesdaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Thursday" id="Thursdaybutton" name="Thursdaybutton" onclick="thursdaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Friday" id="Fridaybutton" name="Fridaybutton" onclick="fridaybutton();"></div>
    <div class="inline" style="display: inline-block;"><input type="button" value="Saturday" id="Saturdaybutton" name="Saturdaybutton" onclick="saturdaybutton();"></div>
    <div class="block" style="display: block;"><div id="datelabelandtime"></div></div>
 
    <div class="block" style="display: block;"><label>Select Redirect:</label><select id='selectredirect' onchange='selectredirect(this.value);'><option value='1'>www.gmail.com</option><option value='2'>www.yahoo.com</option></select></div>
 
    <div class="block" style="display: block;"><label>Message: &nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type='text' name='message' id="message" /><label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value="Add" onclick="addallotment();" /><br/><br /></div>
    
    <table id="allottable">
        <tr>
         <td>Start Time  |</td>
            <td>End Time  |</td>
            <td>Message   |</td>
            <td>Url</td>
        </tr>
        
    </table>
    
    
    </div>
    
    
  
  
</body>
</html>
