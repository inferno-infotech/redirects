
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.session.js"></script>
  
  <!--<link rel="stylesheet" href="css/style.css">-->
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript">
 function submitval()
 {
$.post("http://localhost/samplereq/Database.php",$("#loginuser").serialize(),function(data){
   alert(data); 
   window.sessionStorage['session']=data;
   window.location.href="http://localhost/samplereq/allotment.php"
});     
 
    
}
 
 
    
 
  </script>


</head>
<body>
    <form id="loginuser" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </p>

    <p class="login-submit">
        <button type="button" class="login-button" onclick="submitval();">Login</button>
    </p>

    <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
  </form>
    

  
</body>
</html>
