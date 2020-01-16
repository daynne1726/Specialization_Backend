<?php

    $servername = "localhost";
    $username = "root";//default
    $password = "";//default

    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    header("Location:Dashboard.php");

    if(isset($_POST['add'])){ // Fetching variables of the form which travels in URL
        $book = $_POST['Book'];
        $author = $_POST['Author'];
        
        
    // $conn = new mysqli($servername,$username,$password,"pntraining");
    
        if($book != '' || $author != '' ){
            $sql = "INSERT INTO bookstore (book_name,book_author)Values('$book','$author')";

            $query= mysqli_query($conn,$sql);
            echo "<br>Record Inserted successfully";
        }else{
                echo "Error!!! Unable to Insert Data";
        }
    }

    mysqli_close($conn);
    


    

?>