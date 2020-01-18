
<html>
<head>
  <title>Daine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="Dashboard.php">PHP</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li><a href="Act1.php">Day1</a></li>
        <li><a href="Exercise1.php">Day2</a></li>
        <li><a href="Activity1.php">Day3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
        </ul>
        </div>
    </div>
    </nav>
    
        <?php

        include("Activity2.php");



            function factorial($num){
                if($num<=1){
                    return 1;
                }else{
                    return ($num * factorial($num-1));
                }
            }
            echo factorial(4) ."<hr><hr>";
        ?>
        <table width="210px" border="1px">
        <?php

            function chessBoard(){
                for($row=1;$row<=8;$row++){
                    echo "<tr>";
                    for($col=1;$col<=8;$col++){
                        $total=$row+$col;
                        if($total%2==0)
                        {
                            echo "<td height=20px width=20px bgcolor=#FFFFFF></td>";
                        }
                        else
                        {
                            echo "<td height=20px width=20px bgcolor=black></td>";
                        }
                    }
                    echo "</tr>";
                }
            
            }
            chessBoard();
        ?>
        </table>
        <?php

            function removeValue($element, $array){
                $index = array_search($element, $array);
                if($index !== false){
                    unset($array[$index]);
                }

                // foreach($array as $x){
                //     echo $x . "<br>";
                // }
                echo implode("<br>", $array);


            }

            $month = ["January", "February","March","April","May","June","July","August","September","October","November","December"];

            echo "<hr><hr>";
            removeValue('January', $month);


            
            // echo "<hr><hr>";
            // print_r(removeValue(["January"]));
            echo "<hr><hr>";
 
        ?>
        <table width="100px" border="1px">
        <?php

            function display_string($name,$salary){
                // for($row=1;$row<=2;$row++){
                //     echo "<tr>";
                    for($col=1;$col<=2;$col++){
                        if($col == 1)
                        {
                            echo "<td height=20px width=20px bgcolor=#FFFFFF>".$name."</td>" ;
                            // echo "Name";
                        }
                        else
                        {
                            echo "<td height=20px width=20px bgcolor=white>".$salary."</td>";
                            // echo "Salary";
                        }
                    }
                    echo "</tr>";
                }
            // }
            display_string("name", "salary");
            display_string("daine", 111);
            display_string("Ayane", 111);
            
        ?> 
        </table>
        <?php
        
            function arithmetic(){
                $val = "A00";
                for($x=0; $x < 5;$x++){
                    echo ++$val . "<br>";
                    
                }
            }
                
                echo "<hr><hr>";
                echo arithmetic() . "<hr><hr>";
        ?>

        

        <?php

            function modified(){
                $x = basename("Activity1.php");
                // $y = filemtime($x); 
                // echo filemtime("Activity1.php");
                echo "<br> Filename: $x <br>";
                echo "Last modified date: ".date("l, dS F, Y, h:ia", filemtime("Activity1.php"));
            }

            echo "<hr><hr>".modified();

        ?>

        <?php
            
            function changed_color($text){
                return  preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);  
                // echo $text; 
            }

            echo changed_color("PN Training");
        ?>
    </body>
</html>