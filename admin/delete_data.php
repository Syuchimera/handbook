<?php 

include('db.php');


if (isset($_GET['id'])) {

	if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	$query = "DELETE FROM data WHERE id=$id";
	$result = mysqli_query($conn, $query);

	header("location:index.php?p=add_sub_category");
}
}






 ?>