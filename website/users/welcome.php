<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: /login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="../CSS/newstyle.css">
    <style type="text/css">
        body{
			font: 14px sans-serif; text-align: center; 
			background: url("/images/Kitchen.jpg") no-repeat center center fixed;
			background-size: cover;
		}

    </style>
</head>
<body>
<div class="foreground">
		<div class="topnav">
			<a class="active" href="welcome.php">User Home</a>
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
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
    </div>
	<p>
	A lot of features have not been implemented yet.  This is going to be the user's home page after login.
	</p>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>