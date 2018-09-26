<!DOCTYPE html>

<!-- HIMS-->

<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
		<meta charset = "utf-8">
		<title>Project HIMS</title>
   	<link rel="stylesheet" type="text/css" href="..\CSS\newstyle.css"/>
	<style>
		body{
			background: url("/images/Kitchen.jpg") no-repeat center center fixed;
			background-size: cover;
		}
	</style>
	</head>
	<body>
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
				<h1> Search Results</h1>
				<?php
					$UPC = $_POST['UPC'];
					date_default_timezone_set("America/Chicago"); 
					$db = new mysqli("localhost","proje690","CSCI380website","proje690_masterdatabase");

					if (!$db){
						echo "ERROR: Could not connect to database.  Please try again later.";
						exit;
					}

				$query = "SELECT * FROM Items WHERE UPC=\"".$UPC."\"";
				$result = mysqli_query($db, $query);
				if($result === false) {
					var_dump(mysqli_error());
				}
				else{
					echo "<table border = \"1\">\n 
					<caption>Search conducted on: ".date("Y-m-d")." at ".date("h:i:sa")."</caption>\n

					<thead>\n
					<tr>\n
						<th>UPC</th>\n
						<th>name</th>\n
						<th>category</th>\n
						<th>Brand</th>\n
					</tr>\n
					</thead>\n
					<tbody>\n";
					$num_results = mysqli_num_rows($result);
					for ($i=0; $i < $num_results; $i++){
						$row = mysqli_fetch_array($result);
						echo "		<tr>\n";
						echo "			<td>";
						echo htmlspecialchars( stripslashes($row["UPC"]));
						echo "</td>\n";
						echo "			<td>";
						echo htmlspecialchars( stripslashes($row["name"]));
						echo "</td>\n";
						echo "			<td>";
						echo htmlspecialchars( stripslashes($row["category"]));
						echo "</td>\n";
						echo "			<td>";
						echo htmlspecialchars( stripslashes($row["Brand"]));
						echo "</td>\n";
						echo "		</tr>\n";
					}  
				}
				?>
					
			</div>

	</body>
</html>









