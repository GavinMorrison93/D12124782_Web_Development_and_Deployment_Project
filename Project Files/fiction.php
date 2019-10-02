<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<title>Gavin's Book Club - Fiction</title>
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
<h1>Fiction</h1>
<p>Our range of fiction titles has something for everybody.</p>
</div>
<form>
<?php
include'db_connector.php';
  $Book_ID = isset($_REQUEST['Book_ID']) ? $_REQUEST['Book_ID'] : "";
  $Book_Title = isset($_REQUEST['Book_Title']) ? $_REQUEST['Book_Title'] : "";
  $Author = isset($_REQUEST['Author']) ? $_REQUEST['Author'] : "";
  $ISBN_Code= isset($_REQUEST['ISBN_Code']) ? $_REQUEST['ISBN_Code'] : "";
  $Genre= isset($_REQUEST['Genre']) ? $_REQUEST['Genre'] : "";
echo '<table border="1">'."\n";
$select1 = ("SELECT * FROM book_items Where ISBN_Code BETWEEN 'FIC001' AND 'FIC005'");
$result = mysqli_query($db,$select1);
?>
<table>
                <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Author</th>

			<th>Add to list</th>
                </tr>

                <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
        <td><?php echo htmlspecialchars($row['Book_ID']); ?></td>
        <td><?php echo ($row['Book_Title']); ?></td>
        <td><?php echo ($row['Author']); ?></td>
		<td>
		<form method="POST" action="" >
                    <input type="hidden" name="Book_ID" value="<?php echo $row['Book_ID']; ?>" />
                    <input type="hidden" name="Book_Title" value="<?php echo $row['Book_Title']; ?>" />
                    <input type="hidden" name="Author" value="<?php echo $row['Author']; ?>" />
                    <input type="hidden" name="ISBN_Code" value="<?php echo $row['ISBN_Code']; ?>" />
					<input type="hidden" name="Genre" value="<?php echo $row['Genre']; ?>" />
                    <input id="submit" type="submit" name="submit" value='ADD'/>
                </form></td>
                </tr>
				<?php } ?>            
            </table>
<br><br><a href="mybooks/index.php" 
target="popup" 
onclick="window.open('bootstrap/index.php','popup','width=870,height=600'); return false;">
View your personal book list here</p>
</a>
<?php                 
    if (isset($_REQUEST['submit']))
    {
$try = mysqli_query($db,"INSERT INTO my_books (`Book_ID`, `Book_Title`, `Author`, `ISBN_Code`, `Genre`)
VALUES ('$Book_ID', '$Book_Title', '$Author', '$ISBN_Code', '$Genre')");
     }
?>
</form>
<div>
</br>
</div>
</article>
</div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>
