<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Book List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">My Suggestion List</h2>
<a href="suggestions_create.php" class="btn btn-primary pull-right">Add Book Suggestion</a>
</div>
<?php                    
require_once 'config.php';  
$sql = "SELECT * FROM suggestions";
if($result = $pdo->query($sql)){
if($result->rowCount() > 0){
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";                                      
echo "<th>Book Title</th>";
echo "<th>Author</th>";                                    
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = $result->fetch()){
echo "<tr>";                                       
echo "<td>" . $row['Book_Title'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";                                     
echo "<td>";
echo "<a href='suggestions_update.php?Suggestion_ID=". $row['Suggestion_ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
echo "<a href='suggestions_delete.php?Suggestion_ID=". $row['Suggestion_ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
echo "</td>";
echo "</tr>";
}
echo "</tbody>";                            
echo "</table>";                           
unset($result);
} 
}                                       
unset($pdo);
?>
</div>
</div>        
</div>
</div>
</body>
</html>