<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

form{
            border:1px solid black;
            margin-left:30%; 
            margin-right:30%
            
        }

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
h1{
    text-align:center;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
p{
  text-align: center;
}

</style>
<body>
<?php //include("insertDb.php");?>
<form class="form" action="insertDB.php" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>

    <label><b>Name</b></label>
    <input class="input"  type="text" placeholder="Enter Name" required name="Name" value="">

    <label><b>Email</b></label>
    <input class="input"  type="text" placeholder="Enter Email" required name="Email" value="">

    <label><b>Password</b></label>
    <input class="input" type="password" placeholder="Enter Password" required name="Password"value="">
    <input class="submit" name="signup" type="submit" value="SignUp">
    <p>Already have an account? <a href='Login.php'>Login</a> </p> 
  </div>
</form>

</body>
</html>
