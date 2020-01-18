<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

         <style>
        body {
    /* margin-top:40px;
    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFvBdT_B63So-QXx9ROMGyfOKa_pc5ClikjZItfdmu_7aqHjg6&s");
    background-repeat: no-repeat;
    background-size: cover; */
}
    </style>
</head>
<body>
<link href="form.css" rel="stylesheet">

<form style= " margin-left: 20%;margin-right: 20%;margin-top: 5%" class="form" action="updatedAssignment.php" method="post">
<a href="viewAssignment.php">View Records</a>
     <?php 
        $id=$_REQUEST['id'];
        $link = mysqli_connect("localhost", "root", "", "pntraining");
        $query = "SELECT * from bookstore where id='".$id."'"; 
        $result = mysqli_query($link, $query) or die ( mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>

    <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">

    <div class="form-group">
    <label>Subject:</label>
    <input class="input form-control" name="subject1" type="text" value="<?php echo $row['subject1'];?>">
    </div>

    <div class="form-group">
    <label>Topic:</label>
    <input class="input form-control" name="topic" type="text" value="<?php echo $row['topic'];?>">
    </div>

    <div class="form-group">
      <label>Description:</label>
      <input class="input form-control" name="descript" type="text" value="<?php echo $row['descript'];?>">
    </div>
    
    <div class="form-group"> 
      <label>Date Recieved:</label>
    <input class="input form-control" name="given" type="text" value="<?php echo $row['given'];?>">
    </div>

    <div class="form-group"> 
      <label>Date to Submit:</label>
    <input class="input form-control" name="submission" type="text" value="<?php echo $row['submission'];?>">
    </div>


    <input class="submit btn btn-defaul" name="submit" type="submit" value="Update">
  </form>
   

    
</form>
</body>
</html>
