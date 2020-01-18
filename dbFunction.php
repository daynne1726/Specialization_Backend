<?php
// session_start();
$databaseHost = 'localhost';
$databaseName = 'pntraining';
$databaseUsername = 'root';
$databasePassword = '';
class dbFunction{
    function __construct(){
        global $databaseHost,$databaseName,$databasePassword,$databaseUsername;
        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
        $this->dbh=$mysqli;
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

    }
    
    public function insertbook($name,$author)
        {
        $res=mysqli_query($this->dbh,"INSERT INTO bookstore(book_name, book_author) VALUES('$name','$author')");
        return $res;
        }

    public function fetchdata()
        {
        $result=mysqli_query($this->dbh,"select * from bookstore");
        return $result;
        }

    public function fetchonerecord($id)
	{
        $oneresult=mysqli_query($this->dbh,"select * from bookstore where id=$id");
        return $oneresult;
        }

    public function updatebook($name,$author,$id)
        {
        $updaterecord=mysqli_query($this->dbh, "UPDATE bookstore SET book_name='$name', book_author='$author', WHERE id=$id");
        return $updaterecord;
        }

    // public function delete($id)
    //     {
    //     $deleterecord=mysqli_query($this->dbh,"delete from bookstore where id=$id");
    //     return $deleterecord;
    //     }
    }
    ?>
