<!-- <?php //include('includes/db.php'); ?>
 -->


<?php 

// insert new data

$message = "";
if (isset($_POST['submit'])) {

	$title = $_POST['title'];

	$query = "INSERT INTO category(title) ";
	$query .= "VALUES('$title')";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		die('query failed' . mysqli_error($conn));
		exit();
	} else {
		$message = 'Data added';
	}
}


// delete data

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	$query = "DELETE FROM category WHERE id=$id";
	$result = mysqli_query($conn, $query);

	header("location:insert_data.php");
}





 ?>


	
	<div class="container">
		
	<div class="row">
		<div class="col-lg-12">
			<form action="" method="post">
			<?php  echo $message; ?>
				
				<br>
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" required><br>


				<input type="submit" name="submit" class="btn btn-primary btn-block" value="Add Data">
			</form><br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered" id="myTable">
				<thead>
					<tr>
						<th>id</th>
						<th>title</th>
						<th>edit</th>
						<th>delete</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 

					$query = "SELECT * FROM category";
					$result = mysqli_query($conn, $query);

					while ($row = mysqli_fetch_assoc($result)) {?>

						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['title']; ?></td>
							<td><a href="includes/update_category.php?id=<?php echo $row['id']; ?>">edit</a></td>
							<td><a onclick="javascript: return confirm('delete data?')" href="insert_data.php?id=<?php echo $row['id']; ?>">delete</a></td>
							
						</tr>

						<?php
					}

					 ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
		

	

	</div>
