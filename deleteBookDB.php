<?php
    $link = mysqli_connect("localhost", "root", "", "pntraining");

    $id=$_REQUEST['id'];

    $query = "DELETE FROM bookstore WHERE id=$id"; 
    $result = mysqli_query($link,$query) or die ( mysqli_error());
    header("Location: viewbook.php"); 
?>