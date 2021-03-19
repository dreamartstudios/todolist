<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My-to-do-list</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
	<div class="row my-5">
		<div class="col-md-12">
			<div class="text-center">
				<div class="h1 main-headding">Welcome to my to-do-list</div>
			</div>
		</div>
	</div>
	<!-- end row 1 -->
	<div class="row my-5">
		<div class="col-md-4 my-2">
			<div class="card border-0">
				<div class="card-header bg-primaryy border-0">
					<div class="text-center">
						<div class="h5 text-light">To-Do</div>
					</div>
				</div>
				<div class="card-body">
					<?php
						$sql = "SELECT * FROM to_do";
						$res = mysqli_query($conn,$sql);
						if (mysqli_num_rows($res) > 0) {
							while ($row=mysqli_fetch_assoc($res)) {
								?>

						  <div class="modal-header">
						  	<div class="h6"><?php echo $row['todo_title'];?>
						  		&nbsp;&nbsp;&nbsp;<small class="text-success"><?php echo $row['todo_date'];?></small>
						  	</div>
						  	<a href="delete.php?id=<?php echo $row['id'];?>" type="button" class="close">
					          <span aria-hidden="true"><i class="fas fa-times text-danger fa-sm"></i></span>
					        </a>
						  </div>

						  
						  
						




								<?php
							}
						}
						?>
					
					
				</div>
				<!-- end card-body -->
				<div class="card-footer border-0 bg-transparent">
					<form action="save.todo.php" method="POST"  autocomplete="off">
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="todo_title" class="form-control" placeholder="add somthing ...." required>
								<span><button type="submit" name="submit" class="btn btn-primary">ADD</button></span>
							</div>
						</div>
					</form>
				</div>
				<!-- end footer -->

			</div>
			<!-- end card -->
		</div>
		<!-- end  todo card -->

		<!-- *********************** start on progress card **************************** -->

		<div class="col-md-4 my-2">
			<div class="card border-0">
				<div class="card border-0">
				<div class="card-header bg-successs border-0">
					<div class="text-center">
						<div class="h5 text-light">On progress</div>
					</div>
				</div>
				<div class="card-body">
					<?php
						$sql = "SELECT * FROM working_todo";
						$res = mysqli_query($conn,$sql);
						if (mysqli_num_rows($res) > 0) {
							while ($row=mysqli_fetch_assoc($res)) {
								?>

						  <div class="modal-header">
						  	<div class="h6"><?php echo $row['working_title'];?>
						  		&nbsp;&nbsp;&nbsp;<small class="text-success"><?php echo $row['work_date'];?></small>
						  	</div>
						  	<a href="working.delete.php?id=<?php echo $row['id'];?>" type="button" class="close">
					          <span aria-hidden="true"><i class="fas fa-times text-danger fa-sm"></i></span>
					        </a>
						  </div>

						  
						  
						




								<?php
							}
						}
						?>
					
					
				</div>
				<!-- end card-body -->
				<div class="card-footer border-0 bg-transparent">
					<form action="save.workingtodo.php" method="POST"  autocomplete="off">
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="working_title" class="form-control" placeholder="add somthing ...." required>
								<span><button type="submit" name="submit" class="btn btn-primary">ADD</button></span>
							</div>
						</div>
					</form>
				</div>
				<!-- end footer -->

			</div>
			<!-- end card -->
			</div>
			<!-- end card -->
		</div>

		<!-- *********************** end on progress card **************************** -->



		<div class="col-md-4 my-2">
			<div class="card border-0">
				<div class="card border-0">
				<div class="card-header bg-dangerss border-0">
					<div class="text-center">
						<div class="h5 text-light">Done</div>
					</div>
				</div>
				<div class="card-body">
					<?php
						$sql = "SELECT * FROM done_todo";
						$res = mysqli_query($conn,$sql);
						if (mysqli_num_rows($res) > 0) {
							while ($row=mysqli_fetch_assoc($res)) {
								?>

						  <div class="modal-header">
						  	<div class="h6"><?php echo $row['done_title'];?>
						  		&nbsp;&nbsp;&nbsp;<small class="text-success"><?php echo $row['done_date'];?></small>
						  	</div>
						  	<a href="done.delete.php?id=<?php echo $row['id'];?>" type="button" class="close">
					          <span aria-hidden="true"><i class="fas fa-times text-danger fa-sm"></i></span>
					        </a>
						  </div>

						  
						  
						




								<?php
							}
						}
						?>
					
					
				</div>
				<!-- end card-body -->
				<div class="card-footer border-0 bg-transparent">
					<form action="done.save.php" method="POST"  autocomplete="off">
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="done_title" class="form-control" placeholder="add somthing ...." required>
								<span><button type="submit" name="submit" class="btn btn-primary">ADD</button></span>
							</div>
						</div>
					</form>
				</div>
				<!-- end footer -->

			</div>
			<!-- end card -->
			</div>
			<!-- end card -->
		</div>
	</div>
	</div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>	
</body>
</html>