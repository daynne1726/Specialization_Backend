<?php
    
    //For loop
    //divisible by 2
    echo "Divisible by 2: <br>";
    for($num=1; $num <= 15; $num++){
        if($num % 2 == 0){
            echo "$num"."<br>";
        }
    }

    //divisible by 3
    echo "<br> Divisible by 3: <br>";
    for($num=1; $num <=15; $num++){
        if($num % 3 ==0){
            echo "$num ";
        }
    }

    //divisible 5
    echo "<br> Divisible by 5: <br>";
    for($num=1; $num <=15; $num++){
        if($num % 5 == 0){
            echo "$num ";
        }
    }

    
    

?>