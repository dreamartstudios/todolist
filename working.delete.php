
<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM working_todo WHERE id=$id";
$res = mysqli_query($conn,$sql);
if($res){
	header("Location: index.php");
}else{
	echo "query failed";
}

?>