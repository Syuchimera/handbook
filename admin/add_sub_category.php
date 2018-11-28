



<?php 

$message = "";

if (isset($_POST['submit'])) {
	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$cat_id = $_POST['category'];


	$query = "INSERT INTO sub_category(cat_id, title, description) ";
	$query .= "VALUES($cat_id, '$title', '$description')";

	$result = mysqli_query($conn, $query);

	if (!$query) {
		die('query failed ...' . mysqli_error($conn));
		exit();
	} else {
		$message = "data added";
	}
}

// delete data

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	$query = "DELETE FROM sub_category WHERE id=$id";
	$result = mysqli_query($conn, $query);

	header("location:add_sub_category.php");
	
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

				<label for="description">Description</label>
				<textarea name="description" class="form-control" rows="20" required id="summernote"></textarea><br>
				

				<label>Category</label>
				<select name="category">
					<?php 

					$query = "SELECT * FROM category";
					$result = mysqli_query($conn, $query);

					while($row = mysqli_fetch_assoc($result)){

						$id = $row['id'];
						$title = $row['title'];

						echo "<option value='{$id}'>{$title}</option>";
					 
					}
					?>
					
				</select><br><br>

				<input type="submit" name="submit" class="btn btn-primary btn-block" value="Add Data">
				<!-- <button type="button" name="submit" class="btn btn-primary btn-block" value="Add Data"> -->
					
				</button>

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
						<th>description</th>
						<th>category</th>
						<th>edit</th>
						<th>delete</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 

					$query = "SELECT * FROM sub_category";
					$result = mysqli_query($conn, $query);

					while ($row = mysqli_fetch_assoc($result)) {

						$sub_cat_id  = $row['id'];
						$title       = $row['title'];
						$description = $row['description'];
						$cat_id      = $row['cat_id'];

						?>

						<tr>
							<td><?php echo $sub_cat_id; ?></td>
							<td><?php echo $title; ?></td>
							<td><?php echo $description; ?></td>
							<?php 

							$query = "SELECT * FROM category WHERE id=$cat_id";
							$r = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($r)){
								
								$title = $row['title'];

								echo "<td>{$title}</td>";
							}

							 ?>
							
			<td><a href="includes/update_data.php?id=<?php echo $sub_cat_id; ?>">edit</a></td>
			<td><a onclick="javascript: return confirm('delete data?')" href="add_sub_category.php?id=<?php echo $sub_cat_id; ?>">delete</a></td>
							
						</tr>

						<?php
					}

					 ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>


