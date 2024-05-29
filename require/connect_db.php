<?php
$dbserver = "localhost";
$mysql_username = "root";
$mysql_password = "";  
$db_name = "lmaorofl";
$conn = mysqli_connect ($dbserver, $mysql_username, $mysql_password, $db_name);
if(!$conn) {
   echo "Failed";
   exit;
}
?>