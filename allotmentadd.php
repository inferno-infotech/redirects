<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="insert into schedule(button_id,day,start_time,end_time,message,url)values('".$_POST['idbutton']."','".$_POST['day']."','".$_POST['starttime']."','".$_POST['endtime']."','".$_POST['message']."','".$_POST['url']."')";

mysql_query($query);

$last_id = mysql_insert_id();
//
$query1="select * from schedule where id=".$last_id;

$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<tr id=row".$row['id']."><td id=allot".$row['id'].">".$row['start_time']."</td>"."<td id=link".$row['id'].">".$row['end_time']."</td>"."<td id=status".$row['id'].">".$row['message']."</td>"."<td id=note".$row['id'].">".$row['url']."</td>"."<td>"."<input type='button' id=buttondelete".$row['id']." value='Delete' onclick=deleteuser(".$row['id'].");>"."</td>"."</tr>";
}
mysql_close();
}

?>