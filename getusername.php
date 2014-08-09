<?php
connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="Select * from sample";
$result=mysql_query($query);

 


while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<option id=selectoption".$row['id']." value=".$row['id'].">".$row['fname']."</option>";
}
      
//$last_id = mysql_insert_id();
//echo $last_id;

}



?>