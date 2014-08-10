<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query1="Delete from url where iduser=".$_POST['iduser']." and idbutton=".$_POST['idbutton']." and id=".$_POST['id'];
$result=mysql_query($query1);
$query2="select * from url";
$result1=mysql_query($query2);

while ($row = mysql_fetch_array($result1, MYSQL_ASSOC))
{
echo "<option id=selectbuttononeoption".$row['id']." value=".$row['id'].">".$row['url']."</option>";
}
mysql_close();
}

?>