<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/assignmentexternalstylesheet.css">
<title>Gavin's Book Club - Search Result</title>
</head>
<body>
<div class="container">
<header>
   <img src="images/banner.jpg" align="top">
</header>
<div>  
<nav>
<form action="bookclubsearchresult.php" "secondfilter.php" method="post">
            <input type="text" name="bookSearch" placeholder="Search for Book">
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
<?php
if(isset($_POST['search']))
{
    $bookSearch = $_POST['bookSearch'];
    $query = "SELECT * FROM `book_items` WHERE CONCAT(`Book_ID`, `Book_Title`, `Author`, `ISBN_Code`) LIKE '%".$bookSearch."%'";
    $search_result = searchDB($query); 
}
 else {
    $query = "SELECT * FROM `book_items`";
    $search_result = searchDB($query);
}
function searchDB($query)
{
    $connect = mysqli_connect("localhost", "root", "", "bookclubdatabase");
    $search_Result = mysqli_query($connect, $query);
    return $search_Result;
}
echo "Search result for: $bookSearch";
?>
<br><br>         
            <table>
                <tr>
                    <th>Book Title</th>
					<th>Author</th>					
                    <th>ISBN Code</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Book_Title'];?></td>
                    <td><?php echo $row['Author'];?></td>
                    <td><?php echo $row['ISBN_Code'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
</form>
<br><br>
</article>
</div>
<footer><img src="images/footer.jpg" align="bottom"
</footer>
</div>
</body>
</html>
