<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="insert into url(iduser,idbutton,url,caption)values('".$_POST['iduser']."','".$_POST['idbutton']."','".$_POST['url']."','".$_POST['caption']."')";

mysql_query($query);

$last_id = mysql_insert_id();

$query1="select * from url where id=".$last_id;
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<option id=selectbuttononeoption".$row['id']." value=".$row['id'].">".$row['url']."</option>";
}
mysql_close();
}

?>