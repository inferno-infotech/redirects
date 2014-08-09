<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');



$query1="select * from sample3 where iduser=".$_POST['iduser']." and idbutton=".$_POST['idbutton']." and id=".$_POST['id'];

$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo $row['url']."/".$row['caption'];
}
mysql_close();
}

?>