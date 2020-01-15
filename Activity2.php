<?php
    session_start();
    class User {
    
        public $username;
        public $email;  
        private $password;
        public $browser = array('Firefox','Chrome','Internet Explorer','Safari','Opera');     

        public function __construct($username, $email, $password) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    
        public function get_username() {
            return $this->username;
        }
    
        private function getPassword() {
            return $this->password;
        }
    
        public function passDisplay() {
            return $this->getPassword();
        }


    }



    $user = new User("Daine", "dandancaballero@gmail.com","love");
    echo "Annyeong " .$user->get_username()."!<br><hr><hr>";

    if (isset($_SESSION["username"]) && isset($_SESSION["email"]) && isset($_SESSION["browser"])) {
        echo "Already in session.<br>";
    } else {
        $_SESSION["username"] = $user->username;
        $_SESSION["email"] = $user->email;
        $_SESSION["browser"] = $user->browser;

    }

    echo "Username : " . $_SESSION["username"];
    echo "<br>";
    echo "Email : " . $_SESSION["email"];
    echo "<br>";
    echo "Browser : " . $_SESSION["browser"][1];
    echo "<br>";

    // session_destroy();


?>


<?php

echo "<hr><hr>";
    $marks1 = array(360,310,310,330,313,375,456,111,256);
    $marks2 = array(350,340,356,330,321);
    $marks3 = array(630,340,570,635,434,255,298);

    $maximum = max(max($marks1),max($marks2),max($marks3)); 
    $minimum = min(min($marks1),min($marks2),min($marks3)); 
    echo "Maximum Value From the Set of Arrays : ".$maximum."<br>";
    echo "Minimum Value From the Set of Arrays : ".$minimum."<br>";
?>

