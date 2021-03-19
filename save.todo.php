<?php

include("config.php");



	$title = mysqli_real_escape_string($conn,$_POST['todo_title']);
	$date = date("d-M-Y");

	$sql = "SELECT * FROM to_do WHERE todo_title= '{$title}'";
	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res) > 0){
		echo "<script> alert('task already exists')</script>";
	}
	else{

		$data = "INSERT INTO  `to_do`(todo_title, todo_date) VALUES('{$title}', '{$date}')";
		$ress = mysqli_query($conn,$data);
		if($ress){
			header("Location: index.php");

		}else{
			echo "query failed";
		}

	}

	





	
