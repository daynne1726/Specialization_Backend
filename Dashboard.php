<?php



	// echo "<link href='form.css' rel='stylesheet'>";
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "PNTraining");
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Attempt select query execution
	$sql = "SELECT * FROM bookstore";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table style='border: solid 1px black;>";
				echo "<tr>";
					echo "<th>BOOK</th>";
					echo "<th>AUTHOR</th>";
					// echo "<th>Last Name</th>";
					// echo "<th>Email</th>";
					echo "<th colspan='3'>Action</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['book_name'] . "</td>";
					echo "<td>" . $row['book_author'] . "</td>";
                    $id = $row['id'];
					echo "<td><a href='deleteDB.php?id=$id'>Delete</a></td>";
					echo "<td><a href='editDB.php?id=$id'>Edit</a></td>"; 
				echo "</tr>";
            }
            
			echo "</table>";
			// Free result set
			// mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    echo "<a href='addBook.php?id=$id'>Add</a>";
	
	// Close connection
	mysqli_close($link);
?>