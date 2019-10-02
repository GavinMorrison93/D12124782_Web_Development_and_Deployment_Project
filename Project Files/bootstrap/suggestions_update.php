<?php
require_once 'config.php';
$Book_Title = $Author = "";
if(isset($_POST["Suggestion_ID"]) && !empty($_POST["Suggestion_ID"])){   
$Suggestion_ID = $_POST["Suggestion_ID"];    
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
$sql = "UPDATE suggestions SET Book_Title=:Book_Title, Author=:Author WHERE Suggestion_ID=:Suggestion_ID";
if($stmt = $pdo->prepare($sql)){           
$stmt->bindParam(':Book_Title', $param_title);
$stmt->bindParam(':Author', $param_author);
$stmt->bindParam(':Suggestion_ID', $param_id);           
$param_title = $Book_Title;
$param_author = $Author;          
$param_id = $Suggestion_ID;           
if($stmt->execute()){                
header("location: suggestions_index.php");
exit();
} else{
echo "Something went wrong. Please contact us.";            
}        
unset($stmt);
}  
unset($pdo);
} else{
if(isset($_GET["Suggestion_ID"]) && !empty(trim($_GET["Suggestion_ID"]))){
$Suggestion_ID =  trim($_GET["Suggestion_ID"]);
$sql = "SELECT * FROM suggestions WHERE Suggestion_ID = :Suggestion_ID";
if($stmt = $pdo->prepare($sql)){
$stmt->bindParam(':Suggestion_ID', $param_id);
$param_id = $Suggestion_ID;
if($stmt->execute()){
if($stmt->rowCount() == 1){
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$name = $row["Book_Title"];
$address = $row["Author"];                   
} else{                    
echo "Something went wrong. Please contact us.";
exit();
}                
} else{
echo "Something went wrong. Please contact us.";
}
}       
unset($stmt);       
unset($pdo);
}  else{        
echo "Something went wrong. Please contact us.";
exit();
}
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
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
<h2>Update Suggestion</h2>
</div>
<p>Please edit your suggestion.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div>
<label>Book Title</label>
<input type="text" name="Book_Title" class="form-control" value="<?php echo $Book_Title; ?>">
<span></span>
</div>
<div>
<label>Author</label>
<input type="text" name="Author" class="form-control" value="<?php echo $Author; ?>">
<span></span>
</div>                        
<input type="hidden" name="Suggestion_ID" value="<?php echo $Suggestion_ID; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="suggestions_index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>