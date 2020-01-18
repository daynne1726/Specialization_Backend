<?php 
    include_once("DbConnect.php");
    require_once('dbFunction.php');
    if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $book = $_POST['Book'];
    $author = $_POST['Author'];
 
    if(empty($book) || empty($author)) {                
      
            echo "<font color='red'>Name field is empty.</font><br/>";
    } else {    
        $updatedata=new dbFunction();
        $sql=$updatedata->updatebook($book,$author,$id);
        header("Location: viewbook.php");
    }
}
?>
<?php

    // $id = $_GET['id'];
    // $onerecord=new dbFunction();
    // $sql=$onerecord->fetchonerecord($id);
    // while($res = mysqli_fetch_array($sql))
    // {
    //     $name = $res['Book'];
    //     $auth = $res['Author'];
        
    // }
    ?>


<?php
    // $link = mysqli_connect("localhost", "root", "", "pntraining");

    // if (isset($_POST['update'])) {
    //     $id=$_POST['id'];
    //     $book = $_POST['book'];
    //     $author = $_POST['author'];
    //     // $pass = $_POST['last_name'];
    //     // $email = $_POST['email'];

    //     $query = "UPDATE bookstore set book_name='". $book . "', book_author='". $author ."' where id='".$id."'"; 
    //     // echo $query;
    //     $result = mysqli_query($link, $query) or die ( mysqli_error());

    //     header("Location: viewbook.php"); 
    // }
?>

