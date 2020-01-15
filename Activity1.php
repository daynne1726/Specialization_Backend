
<html>
<body>
    
        <?php



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

                foreach($array as $x){
                    echo $x . "<br>";
                }


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