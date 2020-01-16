<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
    margin-top:40px;
    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO0PeBuKgNYvzqIiwzxDNSrd3vNUsDW8Cw-uX1pYxEf1F6wArLDw&s");
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body>
<a style   = "margin-left:8%" href = "homepage.php">
        <input  id = "add" type="submit" class="btn btn-info" value="Home">
    </a>
<a style   = "margin-left:3%" href = "addAssignment.php">
        <input  id = "add" type="submit" class="btn btn-info" value="Add Assignment">
    </a>

<?php
	echo "<link href='form.css' rel='stylesheet'>";
    $link = mysqli_connect("localhost", "root", "", "pntraining");
   
	
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM bookstore";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
            echo "<col span=2>";
			while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
            echo"
            <col><center><div style = 'background-color: #e6f0ff; margin-left:30%;margin-right:30%;border-radius: 25px;'>
                    <div padding: 2px 16px;>
                        <h1 style = 'background-color:#4d4dff; margin-left:30%;margin-right:30%;' ><b>" . $row['subject1'] . "</b></h1> 
                        <h4>Topic</h4>
                        <p>" . $row['topic'] ."</p>
                        <h4>Description</h4>
                        <p>" . $row['descript'] . "</p> 
                        <h4>Date Given</h4>
                        <li>" .$row['given'] . "</li>
                        <h4>Date Submitted</h4>
                        <li>" .$row['submission'] . "</li>
                        <hr>
                    
                        <h1>  Action </h1>
                        <a style = 'background-color:gray;' href='deleteAssignment.php ?id=$id'>Delete</a>
					 <a style = 'background-color:gray; margin-bottom:-1%;' href='editAssignment.php?id=$id'>Edit</a>
                    </div>
                </div></center></col>";      
					
			}
            mysqli_free_result($result);
            
          
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	mysqli_close($link);
?>
</body>
</html>

