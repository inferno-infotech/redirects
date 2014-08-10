<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="Select * from user";
$result=mysql_query($query);

 


while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
     echo "<tr id=row".$row['id']."><td id=alias".$row['id'].">".$row['Alias']."</td>"."<td id=link".$row['id'].">".$row['linkid']."</td>"."<td id=status".$row['id'].">".$row['status']."</td>"."<td id=note".$row['id'].">".$row['note']."</td>"."<td id=deletebutton".$row['id'].">"."<input type='button' id=buttondelete".$row['id']." value='Delete' onclick=deleteuser(".$row['id'].");>"."</td>"."</tr>";
}
 
mysql_close();
}

?>