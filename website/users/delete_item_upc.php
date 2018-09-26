<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
		<title>Delete Item From Database</title>
		<link rel="stylesheet" type="text/css" href="..\CSS\newstyle.css"/>
	<style>
		body{
			background: url("../images/Kitchen.jpg") no-repeat center center fixed;
			background-size: cover;
		}
	</style>
	</head>
	<body bgcolor="black">
		<div class="topnav">
			<a href="welcome.php">User Home</a>
			<div class="dropdown">
				<button class="dropbtn">
						Access Database
				</button>
				<div class="dropdown-content">
					<a href="all_items.php">Contents of Database</a>
					<a href="search.html">Search</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">
					Edit Database
				</button>
				<div class="dropdown-content">
					<a href="delete_item.html">Delete Item</a>
					<a href="insert_item.html">New Item</a>
				</div>
			</div>
			<a style="float:right" href="logout.php">Sign Out</a>
		</div>
		<div class="foreground">
		<?php
		// Initialize the session
		session_start();
		 
		// If session variable is not set it will redirect to login page
		if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
		  header("location: /login.php");
		  exit;
		}
		$UPC = $_POST['UPC'];

		date_default_timezone_set("America/Chicago"); 
		$db = new mysqli("localhost","proje690","CSCI380website","proje690_masterdatabase");

		if ($db->connect_error){
			echo "ERROR: Could not connect to database.  Please try again later.";
			exit;
		}

		$sql = "DELETE from Items
				  WHERE UPC='".$UPC."'";
		if ($db->query($sql)===TRUE){
			echo "Record deleted successfully";
			
		}else{
			echo "Error deleting record.";
		}



?>
	</div>
	</body>
</html>