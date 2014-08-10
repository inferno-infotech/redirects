<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');



$query1="select *from buttons where user_id=".$_POST['select']; 
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<tr id=row".$row['id']."><td><input type='button' value='delete' onclick=buttondelete();></td><td id=name".$row['id'].">".$row[button_name]."</td><td id=image".$row['id']."><input type='button' name=".$row[button_name]." style='background: url(".$row['image']."); width:100px; height:50px;' /></td></tr>";
}

mysql_close();
}

?>