

<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>

<?php 

if (isset($_GET['p'])) {
	$page = $_GET['p'];
} else {
	$page = "";
}

switch ($page) {

	// page add category
	case 'add_category':
		include('includes/insert_data.php');
		break;
	
	// page add sub category
	case 'add_sub_category':
		include('includes/add_sub_category.php');
		break;
	
	// 
	// case 'add_sub_category':
	// 	include('includes/add_sub_category.php');
	// 	break;

	default:
		include('includes/home.php');
		break;
}


 ?>

	
	
<?php include('includes/footer.php'); ?>