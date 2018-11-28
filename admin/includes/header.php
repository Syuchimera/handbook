
<?php include('includes/db.php'); ?>
<?php 

ob_start();
session_start();


if (isset($_SESSION['user'])) {
	
} else {
	header('location:login.php');
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="css/summernote.css">
	<link rel="stylesheet" type="text/css" href="css/summernote-bs4.css">
	<link rel="stylesheet" type="text/css" href="css/summernote-lite.css">
	

	
</head>
<body>