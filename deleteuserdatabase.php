<?php
connectandadd();

function connectandadd(){
mysql_connect('localhost','root','1234');
mysql_select_db('samplereq');

$query="Delete from sample where id=".$_POST['deleteid'];
mysql_query($query);

      

}


?>