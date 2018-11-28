


<?php 



$message = "";
if (isset($_GET['id'])) {
	$id = (int)$_GET['id'];
} else {
	$id = "";
}

$query = "SELECT * FROM sub_category WHERE id=$id";
$result = mysqli_query($conn, $query);

if (!$result) {
	die('Query failed' . mysqli_error($conn));
} else {

	while ($row = mysqli_fetch_assoc($result)) {
	
	$db_title = $row['title'];
	$db_description = $row['description'];
	$db_category = $row['cat_id'];
	
}

}



if (isset($_POST['submit'])) {
	

	$title = $_POST['title'];
	$description = $_POST['description'];
	$category_id = (int)$_POST['category'];


	$query = "UPDATE sub_category SET ";
	$query .= "title='$title', description='$description', cat_id=$category_id ";
	$query .= "WHERE id=$id";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		die("query failed" . mysqli_error($conn));
		exit();
	} else {
		$message = "update successfull";
		// header('location:../add_sub_category.php');
	}
}

 ?>




	<div class="container">
		<div class="row">
			<div class="col-lg-12"><br><br><br>
				<form action="" method="post">
				<?php echo $message; ?>
				<label for="title">Title</label>
				<input type="text" name="title" value="<?php echo $db_title; ?>" required maxlength="400" class="form-control"><br>

				<label for="description">Description</label>
				<textarea rows="10" class="form-control" name="description" id="summernote"><?php echo $db_description; ?></textarea><br>

				<label for="category">Category</label>
				<select name="category">
					<?php 

					$query = "SELECT * FROM category WHERE id=$db_category LIMIT 1";
					$result = mysqli_query($conn, $query);

					while ($row = mysqli_fetch_assoc($result)) {
						$cid = $row['id'];
						$ctitle = $row['title'];
						echo "<option value='{$cid}'>{$ctitle}</option>;";
					}

					$query = "SELECT * FROM category";
					$res = mysqli_query($conn, $query);

					while ($row = mysqli_fetch_assoc($res)) {
						$category_id = $row['id'];
						$category_title = $row['title'];

						echo "<option value='{$category_id}'>{$category_title}</option>;";
					}
					 ?>
					
				</select><br><br>

				<input type="submit" name="submit" value="update Data" class="btn btn-danger btn-block">
			</form>
			</div>
		</div>
	</div>
	
