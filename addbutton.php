<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="insert into buttons(user_id,button_name,url,caption)values('".$_POST['id1']."','".$_POST['name']."','".$_POST['url']."','".$_POST['caption']."')";

mysql_query($query);
$last_id = mysql_insert_id();

$query1="select * from buttons where id=".$last_id;
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<option id=selectbuttonoption".$row['id']." value=".$row['id'].">".$row['button_name']."</option>";
}
mysql_close();
}

?>