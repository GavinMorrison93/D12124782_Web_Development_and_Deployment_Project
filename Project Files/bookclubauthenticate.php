<!DOCTYPE html>
<html> 
<?php
include'db_connector.php';
require('welcometothebookclub.php');
if(isset($_POST['User_Name']) and ($_POST['Password'])){
  //go inside
  $User_Name = $_POST['User_Name'];
  $Password= $_POST['Password'];
  $remember = $_POST['remember'];
    if(isset($_POST['remember'])){
      setcookie('username',$username, time()+60*60*7);
      setcookie('password',$password, time()+60*60*7);
    }  
  $query = "SELECT * FROM `users` WHERE User_Name='$User_Name' and Password='$Password'";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['User_Name'] = $User_Name;
header("Location: welcometothebookclub.php");
}else{
header("Location: bookclubinvalid.php");
}
}
?>
</html>