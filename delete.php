
<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM to_do WHERE id=$id";
$res = mysqli_query($conn,$sql);
if($res){
	header("Location: index.php");
}else{
	echo "query failed";
}

?>