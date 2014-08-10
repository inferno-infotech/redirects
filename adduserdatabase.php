<?php


connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="insert into user(Alias,fname,lname,email,phone,linkid,note,status)values('".$_POST['alias']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['link']."','".$_POST['note']."','".$_POST['status']."')";
mysql_query($query);
$last_id = mysql_insert_id();

$query1="select * from user where id=".$last_id;
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "<tr id=row".$row['id']."><td id=alias".$row['id'].">".$row['Alias']."</td>"."<td id=link".$row['id'].">".$row['linkid']."</td>"."<td id=status".$row['id'].">".$row['status']."</td>"."<td id=note".$row['id'].">".$row['note']."</td>"."<td id=deletebutton".$row['id'].">"."<input type='button' id=buttondelete".$row['id']." value='Delete' onclick=deleteuser(".$row['id'].");>"."</td>"."</tr>";
}
mysql_close();
}

?>