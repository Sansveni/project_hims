<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />		<title>All Items in Database</title>
		<link rel="stylesheet" type="text/css" href="..\CSS\newstyle.css"/>
		<style>
			body{
				background: url("../images/pantry.jpg") no-repeat center center fixed;
				background-size: cover;
			}
		</style>	</head>	<body bgcolor="black">
		<div class="topnav">
			<a href="../index.html">Home</a>
				<div class="dropdown">
					<button class="dropbtn">
						<div>Database Access</div>
					</button>
					<div class="dropdown-content">
						<a href="all_items.php">Contents of Database</a>
						<a href="search.html">Search</a>
					</div>
				</div>
			<a style="float:right" href="../login.php">Log In</a>
			<a style="float:right" href="../register.php">Sign Up</a>
		</div>
		<div class="foreground">
		<h1>Items in Database</h1>		<?php		date_default_timezone_set("America/Chicago"); 		$db = new mysqli("localhost","proje690","CSCI380website","proje690_masterdatabase");
		if (!$db){			echo "ERROR: Could not connect to database.  Please try again later.";
			exit;
		}		$query = "select * from Items";		$result = mysqli_query($db,$query);		$num_results = mysqli_num_rows($result);		echo "<p>Number of items found: ".$num_results."</p>\n";		echo "<table align = \"center\" border = \"1\">\n ";		echo "	<caption>Info retrieved from food_database on: ".date("Y-m-d")." at ".date("h:i:sa")."</caption>\n";		echo "	<thead>\n			<tr>\n				<th>UPC</th>\n				<th>name</th>\n				<th>category</th>\n				<th>Brand</th>\n			</tr>\n	</thead>\n	<tbody>\n";	
		for ($i=0; $i < $num_results; $i++){			$row = mysqli_fetch_array($result);			echo "		<tr>\n";			echo "			<td>";
			echo htmlspecialchars( stripslashes($row["UPC"]));			echo "</td>\n";			echo "			<td>";
			echo htmlspecialchars( stripslashes($row["name"]));			echo "</td>\n";			echo "			<td>";
			echo htmlspecialchars( stripslashes($row["category"]));			echo "</td>\n";			echo "			<td>";
			echo htmlspecialchars( stripslashes($row["Brand"]));			echo "</td>\n";
			echo "		</tr>\n";
		}  			echo "	</tbody>\n</table>";
?>	</div>
	</body></html>