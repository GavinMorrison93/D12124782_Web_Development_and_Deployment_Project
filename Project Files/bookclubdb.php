<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<title>Gavin's Book Club - Registration Successful</title>
</head>
<body>
<div class="container">
<header>
   <img src="images/banner.jpg" align="top">
</header>
<div>  
<nav>

<form action="bookclubsearchresult.php" method="post">
            <input type="text" name="bookSearch" placeholder="Search for book">
            <input type="submit" name="search" value="Search"><br><br>
</form>
<?php
session_start();
echo "Members please log in ";
echo"<a href='Bookclublogin.php'> here</a>";
?>
  <ul>
    <li><a href="index.php"><img border="0" alt="Welcome" src="images/home.jpg" onmouseover="this.src='images/homeglow.jpg'" onmouseout="this.src=' images/home.jpg '"width="210" height="45"></a></li>
    <li><a href="mybooks2.php"><img border="0" alt="Menu" src="images/mybooks.jpg" onmouseover="this.src='images/mybooksglow.jpg'" onmouseout="this.src=' images/mybooks.jpg '"width="210" height="45"></a></li>
	<li><a href="fiction2.php"><img border="0" alt="images/Fiction" src="images/fiction.jpg" onmouseover="this.src='images/fictionglow.jpg'" onmouseout="this.src=' images/fiction.jpg '"width="210" height="45"></a></li>
	<li><a href="reference2.php"><img border="0" alt="Mains" src="images/reference.jpg" onmouseover="this.src='images/referenceglow.jpg'" onmouseout="this.src=' images/reference.jpg '"width="210" height="45"></a></li>
	<li><a href="biography2.php"><img border="0" alt="Extras" src="images/biography.jpg" onmouseover="this.src='images/biographyglow.jpg'" onmouseout="this.src=' images/biography.jpg '"width="210" height="45"></a></li>
	<li><a href="hobbies2.php"><img border="0" alt="Offers" src="images/hobbies.jpg" onmouseover="this.src='images/hobbiesglow.jpg'" onmouseout="this.src=' images/hobbies.jpg '"width="210" height="45"></a></li>
	<li><a href="bookclubcontact2.php"><img border="0" alt="Contact" src="images/contact.jpg" onmouseover="this.src='images/contactglow.jpg'" onmouseout="this.src=' images/contact.jpg '"width="210" height="45"></a></li>
  </ul>
</nav>
</div>
<div>
<article>
<div>
<h1>Registration Successful!</h1>
</div>
	<form>
	  <br><br>
      <center>
<?php
include'db_connector.php';
$target = "uploads/"; 
$target = $target . basename( $_FILES['User_Image']['name']);
$User_Name = $_POST['User_Name'];
$Password = $_POST['Password'];
$User_Image = ($_FILES['User_Image']['name']);
move_uploaded_file($_FILES['User_Image']['tmp_name'], $target); 
echo "Registration successful";
echo "<br>Welcome: " . $User_Name;
$insert1 = "INSERT INTO users (User_Name, Password, User_Image) VALUES('$User_Name', '$Password', '$User_Image')";
mysqli_query($db,$insert1);
echo "<br>You are now registered with Gavin's Book Club";
?>
<br><br>
<img src="uploads/<?php echo $User_Image ?>" width="20%" height="20%">
<br>
<p><p>Please proceed to our <a href= "bookclublogin.php">Login Page</a></p><p>
</form>
<div>
</div>
</article>
<div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>
