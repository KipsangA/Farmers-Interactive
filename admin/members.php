<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>Find People></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/home_style2.css">
</head>
<body>
<div class="row">
	<div class="col-sm-12">
		<center><h2>Find new people</h2></center><br><br>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form class="search_form" action="">
					<input type="text" name="search_user" placeholder="Search friend">
					<button class="btn btn-info" type="submit" name="search_user_btn">Search</button>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div><br><br>
		<?php search_user(); ?>
	</div>
</div>
</body>
</html>