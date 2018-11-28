
<?php 

session_start();

if (isset($_POST['submit'])) {
	
	echo $data = $_POST['search'];
	$_SESSION['search'] = $data;
}
 ?>