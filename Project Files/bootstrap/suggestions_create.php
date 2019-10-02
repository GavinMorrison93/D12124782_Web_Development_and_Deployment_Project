<?php
require_once 'config.php';
$Book_Title = $Author = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$input_title = trim($_POST["Book_Title"]);
if(empty($input_title)){   
} elseif(!filter_var(trim($_POST["Book_Title"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
} else{
$Book_Title = $input_title;
}
$input_author = trim($_POST["Author"]);
if(empty($input_author)){          
} else{
 $Author = $input_author;
}
$sql = "INSERT INTO suggestions (Book_Title, Author) VALUES (:Book_Title, :Author)";
if($stmt = $pdo->prepare($sql)){
$stmt->bindParam(':Book_Title', $param_title);
$stmt->bindParam(':Author', $param_author);      
$param_title = $Book_Title;
$param_author = $Author;
if($stmt->execute()){
header("location: suggestions_index.php");
exit();
} 
unset($stmt);
}
unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
        body {
		background-color: #039bed;
		}
		.wrapper{
			width: 850px;
			margin: 0 auto;
			background-color: #039bed;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Add Book Suggestion</h2>
</div>
<p>Please fill this form and submit to add employee record to the database.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div>
<label>Book Title</label>
<input type="text" name="Book_Title" class="form-control" value="<?php echo $Book_Title; ?>">                        
</div>
<div>
<label>Author</label>
<textarea name="Author" class="form-control"><?php echo $Author; ?></textarea>                          
</div>                        
<input type="submit" class="btn btn-primary" value="Submit">
<a href="suggestions_index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>