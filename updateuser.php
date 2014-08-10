<?php
connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="Update user set Alias='".$_POST['alias']."',fname='".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."',phone='".$_POST['phone']."',linkid='".$_POST['linkid']."',note='".$_POST['note']."',status='".$_POST['status']."' where id =".$_POST['id'];
$result=mysql_query($query);


$query1="Select * from user where id=".$_POST['id'];
$result=mysql_query($query1);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "<td id=alias".$row['id'].">".$row['Alias']."</td>"."<td id=link".$row['id'].">".$row['linkid']."</td>"."<td id=status".$row['id'].">".$row['status']."</td>"."<td id=note".$row['id'].">".$row['note']."</td>"."<td id=deletebutton".$row['id'].">"."<input type='button' id=buttondelete".$row['id']." value='Delete' onclick=deleteuser(".$row['id'].");>"."</td>";
}
      


}



?>