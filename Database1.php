<?php

connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="insert into sample(value)values('".$_POST['value']."')";

mysql_query($query);
      
$last_id = mysql_insert_id();
echo $last_id;

}


?>