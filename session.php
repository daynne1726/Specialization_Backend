<?php
// session_start(); 
// $x = session_id();
// echo $x;




// session_destroy();

//Calculate 60 days in the future //seconds * minutes * hours * days + current time 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 
?> 

<?php 
if(isset($_COOKIE['lastVisit'])){
    $visit = $_COOKIE['lastVisit']; 
}else{
    echo "You've got some stale cookies!"; }
echo "Your last visit was - ". $visit; 
?>
