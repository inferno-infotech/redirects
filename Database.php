<?php
connectandretrive();
function connectandretrive(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');
//$passhash=hash("md5",$_POST['password']);


$query="SELECT * from user where email='".$_POST['login']."' and password='".$_POST['password']."'";

$result=mysql_query($query);

 while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
    echo $row['id']."/".$row['fname']."/".$row['phone']."/".$row['email'];
 }


}





?>