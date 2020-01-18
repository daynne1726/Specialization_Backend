<!DOCTYPE html>
<html lang="en">
<head>
<title>Daine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
    /* margin-top:40px;
    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO0PeBuKgNYvzqIiwzxDNSrd3vNUsDW8Cw-uX1pYxEf1F6wArLDw&s");
    background-repeat: no-repeat;
    background-size: cover; */
}
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Dashboard.php">PHP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Act1.php">Day1</a></li>
        <li><a href="Exercise1.php">Day2</a></li>
        <li><a href="Activity1.php">Day3</a></li>
        <!-- <li><a href="#">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
<a style   = "margin-left:3%" href = "addBook.php">
        <input  id = "add" type="submit" class="btn btn-info" value="Add Book">
    </a>

<?php
	// echo "<link href='form.css' rel='stylesheet'>";
  //   $link = mysqli_connect("localhost", "root", "", "pntraining");
   
	
	// if($link === false){
	// 	die("ERROR: Could not connect. " . mysqli_connect_error());
	// }
	// $sql = "SELECT * FROM bookstore";
	// $result = mysqli_query($link, $sql);
	// if($result){
	// 	if(mysqli_num_rows($result) > 0){
  //           echo "<col span=2>";
	// 		while($row = mysqli_fetch_array($result)){
  //               $id = $row['id'];
      require_once ("dbFunction.php");
      $data=new dbFunction();
      $sql=$data->fetchdata();
      while($row = mysqli_fetch_array($sql)) {        
            $id = $row['id'];
            echo"
            <col><center><div style = 'background-color: #e6f0ff; margin-left:30%;margin-right:30%;border-radius: 25px;'>
                    <div padding: 2px 16px;>
                        <h4>Book Name</h4>
                        <p>" . $row['book_name'] ."</p>
                        <h4>Author</h4>
                        <p>" . $row['book_author'] . "</p> 
                        <hr>
                        <h1>  Action </h1>
                        <a style = 'background-color:gray;' href='deletebookDB.php ?id=$id'>Delete</a>
					 <a style = 'background-color:gray; margin-bottom:-1%;' href='updatebook.php?id=$id'>Update</a>
                    </div>
                </div></center></col>";      
					
			}
            // mysqli_free_result($result);
            
          
	// } else{
	// 		echo "No records matching your query were found.";
	// 	}
	// } else{
	// 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	// }
	// mysqli_close($link);	
?>
</body>
</html>

