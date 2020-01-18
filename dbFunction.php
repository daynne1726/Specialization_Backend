<?php  
require_once 'dbConnect.php';  
session_start();  
    class dbFunction {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new DbConnect();;  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function UserRegister($name, $email, $password){  
                // $password = md5($password);  
                $qr = "INSERT INTO data(Name, Email, Password) values('".$username."','".$emailid."','".$password."')" or die(mysql_error());
                // $sql = "INSERT INTO data (Name,Email,Password)Values('$name','$userName','$password')";
                $query= mysqli_query($conn,$sql);
                header("Location:Login.php");
                // return $qr;  
               
        }  
        // public function Login($emailid, $password){  
        //     $res = mysql_query("SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
        //     $user_data = mysql_fetch_array($res);  
        //     //print_r($user_data);  
        //     $no_rows = mysql_num_rows($res);  
              
        //     if ($no_rows == 1)   
        //     {  
           
        //         $_SESSION['login'] = true;  
        //         $_SESSION['uid'] = $user_data['id'];  
        //         $_SESSION['username'] = $user_data['username'];  
        //         $_SESSION['email'] = $user_data['emailid'];  
        //         return TRUE;  
        //     }  
        //     else  
        //     {  
        //         return FALSE;  
        //     }  
               
                   
        // }  
        // public function isUserExist($emailid){  
        //     $qr = mysqli_query"SELECT * FROM data WHERE Email = '".$emailid."'");  
        //     echo $row = mysqli_num_rows($qr);  
        //     if($row > 0){  
        //         return true;  
        //     } else {  
        //         return false;  
        //     }  
        // }  
    }  
?>  