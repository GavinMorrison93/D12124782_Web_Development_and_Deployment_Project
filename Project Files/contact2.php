<!DOCTYPE html>
<html>
<head>
<title>Gavin's Book Club - Contact</title>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/animation.js"></script>
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
	<li><a href="contact2.php"><img border="0" alt="Contact" src="images/contact.jpg" onmouseover="this.src='images/contactglow.jpg'" onmouseout="this.src=' images/contact.jpg '"width="210" height="45"></a></li>
  </ul>
</nav>
</div>
<div>
<article>
     <p><img src="images/smileybook.jpg" alt="Smiley face" align="right" style="width:300px;height:300px;"></p>  
  <h1>Contact</h1>
  <div class="animation">
  <h3>We can be contacted at:</h3>
</div>
    <br>
  <p>5 Imaginary Row</p>
  <p>Fictiontown</p>
  <p>Dublin 50</p>
  <br>
  <p>Telephone: 01 666 7777
  <br>
  <p><a href= "mailto:gav@bookblub.com">Email us </a></p>
 </article>
</div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>