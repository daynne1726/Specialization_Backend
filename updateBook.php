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

</style>
<body>
<?php //include("insertbookDb.php");?>
<form class="form" action="updatebookDB.php" method="post">
  <div class="container">
    <h1>Book</h1>
    <hr>

    <label><b>BOOK</b></label>
    <input class="input"  type="text" placeholder="Enter Book Name" name="Book" value="">

    <label><b>Author</b></label>
    <input class="input"  type="text" placeholder="Enter Author" name="Author" value="">
    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    <div>
    <input class="submit" name="update" type="submit" value="Update">
    </div>
    
  </div>
</form>

</body>
</html>
