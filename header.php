<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gorila CSS 2</title>
	<link rel="stylesheet" href="scss/vendors/plugins.css">
	<link rel="stylesheet" href="css/vendors/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="css/vendors/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/vendors/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/style.css">
    <script src="js/vendors/jquery/jquery-3.1.0.min.js"></script>
	<script src="js/vendors/bootstrap/bootstrap.min.js"></script>
	<script src="js/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

<?php include("functions.php");
connect();
session_start();

if (isset($_SESSION['uid'])) {

	include ("safe.php");
}

include("navbar.php");