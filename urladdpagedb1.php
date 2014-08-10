<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');



$query1="select * from url where iduser=".$_POST['iduser']." and idbutton=".$_POST['idbutton'];

$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<option id=selectbuttononeoption".$row['id']." value=".$row['id'].">".$row['url']."</option>";
}
mysql_close();
}

?>