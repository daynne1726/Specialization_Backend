<?php

    $servername = "localhost";
    $username = "root";//default
    $password = "";//default

    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    

    if(isset($_POST['signup'])){ // Fetching variables of the form which travels in URL
        $name = $_POST['Name'];
        $userName = $_POST['Email'];
        $password = $_POST['Password'];
        
        
    // $conn = new mysqli($servername,$username,$password,"pntraining");
    
        if($name != '' || $userName != '' || $password != '' ){
            $sql = "INSERT INTO data (Name,Email,Password)Values('$name','$userName','$password')";

            $query= mysqli_query($conn,$sql);
            header("Location:Login.php");
            echo "<br>Record Inserted successfully";
        }else{
                echo "Error!!! Unable to Insert Data";
        }
    }

    mysqli_close($conn);
    


    

?>