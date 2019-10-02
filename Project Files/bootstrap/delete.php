<?php
if (isset($_POST["Book_ID"]) && !empty($_POST["Book_ID"])) {
require_once 'config.php';
$sql = "DELETE FROM my_books WHERE Book_ID = :Book_ID";
if ($stmt = $pdo->prepare($sql)) {
$stmt->bindParam(':Book_ID', $param_id);
$param_id = trim($_POST["Book_ID"]);
if ($stmt->execute()) {
header("location: index.php");
exit();
}
}
    unset($stmt);
    unset($pdo);
}
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>View Record</title> 
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
    <h1>Delete Suggestion</h1> 
</div> 
<form action="<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>" method="post"> 
<div class="alert alert-primary"> 
<input type="hidden" name="Book_ID" value="<?php
echo trim($_GET["Book_ID"]);
?>"/> 
<p>Are you sure you want to delete this suggestion?</p><br> 
<p> 
<input type="submit" value="Yes" class="btn btn-primary"> 
<a href="index.php" class="btn btn-default">No</a> 
</p> 
</div> 
</form> 
</div> 
</div>         
</div> 
</div> 
</body> 
</html>