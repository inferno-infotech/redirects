<?php
connectandretrive();
function connectandretrive(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');
$query="SELECT * from sample ORDER BY id DESC LIMIT 1";
$result=mysql_query($query);
 while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
     echo $row['value'];
 }


}





?>