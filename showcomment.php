<?php
include('dbcon.php');
$comsql="SELECT * FROM commentdata";
$commsql=mysql_query($comsql);
while ($tampil = mysql_fetch_array($commsql)){
echo $tampil['commentText'];
}
?>