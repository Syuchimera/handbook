<?php include('db.php'); ?>

<?php 

$data = array();

$query = "SELECT * FROM sub_category";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
	
	$data[] = $row;

}

echo json_encode($data);





 ?>