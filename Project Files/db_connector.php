<?php
$db_name = "bookclubdatabase";
$mysql_user= "root";
$mysql_pass = "";
$server_name = "localhost";
$db = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(mysqli_connect_errno()){
echo "failed to connect";
}
?>