<html>
	<head>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
	<meta charset = "utf-8">
	<title>Insert Items Results</title>
	<link rel="stylesheet" type="text/css" href="..\CSS\newstyle.css"/>
	<style>
	body{				background: url("/images/desk.jpg") no-repeat center center fixed;				background-size: cover;			}		</style>
	</head>
	<body bgcolor="black">
	<div class="topnav">
	<a href="welcome.php">User Home</a>
	<div class="dropdown">
	<button class="dropbtn">
	Access Database
	</button>
	<div class="dropdown-content">					<a href="all_items.php">Contents of Database</a>					<a href="search.html">Search</a>				</div>			</div>			<div class="dropdown">				<button class="dropbtn">					Edit Database				</button>				<div class="dropdown-content">					<a href="delete_item.html">Delete Item</a>					<a href="insert_item.html">New Item</a>				</div>			</div>			<a style="float:right" href="logout.php">Sign Out</a>		</div>		<div class="foreground">		<h1>Results</h1>		<?php					$UPC = $_POST["UPC"];			$name = $_POST["name"];			$category = $_POST["category"];			$brand = $_POST["brand"];			if (!$UPC || !$name || !$category || !$brand){				die( "You have not entered all the required details.<br>\nPlease go back and try again.\n");			}			$db = new mysqli("localhost","proje690","CSCI380website","proje690_masterdatabase");			if (!$db){				echo "ERROR: Could not connect to database.  Please try again later.";				exit;			}			$query = "INSERT INTO Items VALUES			('".$UPC."','".$name."','".$category."','".$brand."')";			$result = $db->query($query);		if($result)			echo "Item added to database.<br>";		else			echo "Error adding item (is it already in database?)";				?>		</div>	</body></html>