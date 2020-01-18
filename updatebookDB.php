<?php
    $link = mysqli_connect("localhost", "root", "", "pntraining");

    if (isset($_POST['update'])) {
        $id=$_POST['id'];
        $book = $_POST['book'];
        $author = $_POST['author'];
        // $pass = $_POST['last_name'];
        // $email = $_POST['email'];

        $query = "UPDATE bookstore set book_name='". $book . "', book_author='". $author ."' where id='".$id."'"; 
        // echo $query;
        $result = mysqli_query($link, $query) or die ( mysqli_error());

        header("Location: viewbook.php"); 
    }
?>

