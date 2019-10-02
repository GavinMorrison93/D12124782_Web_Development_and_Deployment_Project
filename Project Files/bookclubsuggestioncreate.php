<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<title>Gavin's Book Club - Suggest a bookl</title>
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
echo "Welcome " . $_SESSION['User_Name'];
echo"<a href='bookclublogout.php'> Log out</a>";
 ?>
  <ul>
    <li><a href="welcometothebookclub.php"><img border="0" alt="Welcome" src="images/home.jpg" onmouseover="this.src='images/homeglow.jpg'" onmouseout="this.src=' images/home.jpg '"width="210" height="45"></a></li>
    <li><a href="mybooks.php"><img border="0" alt="Menu" src="images/mybooks.jpg" onmouseover="this.src='images/mybooksglow.jpg'" onmouseout="this.src=' images/mybooks.jpg '"width="210" height="45"></a></li>
	<li><a href="fiction.php"><img border="0" alt="Fiction" src="images/fiction.jpg" onmouseover="this.src='images/fictionglow.jpg'" onmouseout="this.src=' images/fiction.jpg '"width="210" height="45"></a></li>
	<li><a href="reference.php"><img border="0" alt="Mains" src="images/reference.jpg" onmouseover="this.src='images/referenceglow.jpg'" onmouseout="this.src=' images/reference.jpg '"width="210" height="45"></a></li>
	<li><a href="biography.php"><img border="0" alt="Extras" src="images/biography.jpg" onmouseover="this.src='images/biographyglow.jpg'" onmouseout="this.src=' images/biography.jpg '"width="210" height="45"></a></li>
	<li><a href="hobbies.php"><img border="0" alt="Offers" src="images/hobbies.jpg" onmouseover="this.src='images/hobbiesglow.jpg'" onmouseout="this.src=' images/hobbies.jpg '"width="210" height="45"></a></li>
	<li><a href="contact.php"><img border="0" alt="Contact" src="images/contact.jpg" onmouseover="this.src='images/contactglow.jpg'" onmouseout="this.src=' images/contact.jpg '"width="210" height="45"></a></li>
  </ul>
</nav>
</div>
<div>
<article>
 <div>
<h1>Make a suggestion!!!</h1>
<p>This is your chance to suggest an addition to our Book Club</p>
<p>Please make your suggestion 

<a href="bootstrap/suggestions_index.php" 
  target="popup" 
  onclick="window.open('bootstrap/suggestions_index.php','popup','width=870,height=600'); return false;">
    Here</p>
</a>
</br>
</div>
</article>
</div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>