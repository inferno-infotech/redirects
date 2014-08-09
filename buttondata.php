<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');



$query1="select * from sample1 where id1=".$_POST['select'];
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<option id=selectbuttonoption".$row['id']." value=".$row['id'].">".$row['Name']."</option>";
}
mysql_close();
}

?>