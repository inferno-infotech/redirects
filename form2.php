<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.session.js"></script>
  
  <!--<link rel="stylesheet" href="css/style.css">-->
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript">
  function submit1()
  {
     $.post("http://localhost/samplereq/Database1.php",{'value':'Enable'},function(data){
         alert(data);
     })
      
  }
  function submit2()
  {
       $.post("http://localhost/samplereq/Database1.php",{'value':'Disable'},function(data){
         alert(data);
     })
  }
  
      
  </script>


</head>
<body>
 <form name=myform id='formclicked'>
     <input type="radio" name=myradio value="Enable" onclick="submit1();">Enable
     <input type="radio" name=myradio value="Disable" onclick="submit2()">Disable

</form>
  
</body>
</html>
