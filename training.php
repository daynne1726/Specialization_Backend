<?php
    // $demominator = 0;

    // if($demominator !=0){
    //     echo 2/ $demominator;

    // }else{
    //     echo "cannot be divided by zero";
    // }

    $servername = "localhost";
    $username = "root";//default
    $password = "";//default

    // $conn = new mysqli($servername,$username,$password,"pntraining");
    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    // if($conn->connect_error){
    //     die("Connection failed: ". $conn->connect_error);
    // }else{
    //     echo("Connected Successfully");
    // }
    if($conn === false){
        die("Connection failed: ".mysqli_connect_error());
    }else{
        echo("Connected Successfully");
    }

    $sql = "INSERT INTO persons (first_name, middle_name, last_name,email)Values('Krystal','Cabaron','Caballero','bhe@gmail.com')";

    if(mysqli_query($conn,$sql)){
        echo "<br>Record Inserted successfully";
    }else{
        echo "Error DLi pwede";
    }
    


    

?>