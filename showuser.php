<?php
connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="Select * from user where id ='".$_POST['Alias']."'";

$result=mysql_query($query);



while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo $row['Alias']."/".$row['fname']."/".$row['lname']."/".$row['email']."/".$row['phone']."/".$row['linkid']."/".$row['note']."/".$row['status'];
}
      
//$last_id = mysql_insert_id();
//echo $last_id;

}



?>