<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<title>Welcome to Gavin's Book Club</title>
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
 <p><img src="images/bookbee.jpg" alt="Bookbee" align="right" style="width:150px;height:200px;"></p>  
  <h1>Welcome to the Members Area</h1>
  <p>If you like reading then you have come to the right place. </p>
  <p>So please take a look around to see if there is anything you like.</p>
  <p>Please avail of our facility to compile your own book list.</p>
  <p>If you have a suggestion for a book title you would like to see in our club, just click on the suggestion box.
  <div>
</br>
<a href="bookclubsuggestioncreate.php"><img border="0" alt="Welcome" align="left" src="images/suggestionbox.jpg" width="100" height="100"></a></li>  
</div>
</article>
</div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>