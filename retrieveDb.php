<?php
    $servername = "localhost";
    $username = "root";//default
    $password = "";//default
 
    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    if($conn === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "SELECT Email FROM data";
    $result = mysqli_query($link, $sql);
    if()
?>