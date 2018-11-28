<?php include('db.php'); ?>


<?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = "";
}

$message = "";

if (isset($_POST['submit'])) {
	
	$title = $_POST['title'];

	$query = "UPDATE category SET title='$title' WHERE id='$id'";
	$result = mysqli_query($conn, $query);

	header('location:../insert_data.php');
}


$query = "SELECT * FROM category WHERE id=$id";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
	
	$db_id = $row['id'];
	$db_title = $row['title'];
}

 ?>

 <?php include('header.php'); ?>
	<?php include('navigation.php'); ?>


	<div class="container">
		<div class="row">
			<div class="col-lg-12"><br><br><br>
				<form action="" method="post">
				<?php echo $message; ?>
				<label for="title">Title</label>
				<input type="text" name="title" value="<?php echo $db_title; ?>" required maxlength="400" class="form-control"><br>

				<input type="submit" name="submit" value="update Data" class="btn btn-danger btn-block">
			</form>
			</div>
		</div>
	</div>
	
<?php include('footer.php'); ?>