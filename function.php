<?php

    function getSum($a, $b){
        return $a+$b;
    }

    
    // $array = [1,2,3,4,5];
    function displayArr($array){
        foreach($array as $x){
            echo "$x ";
        }
    }
    // displayArr();


    function displayMultiArr($multiArray){
        print_r($multiArray);

        // $key = array_keys($multiArray);
        // for($i=0;$i<count($multiArray);$i++){
        //     echo $key[$i]. "<br>";
        //     foreach($multiArray[$key[$i]] as $keys => $value){
        //         echo $keys. $value;
        //         foreach($value as $x => $y){
        //             echo $x . $y;
        //         }
        //     }
        // }
        
// foreach($keys as $key)
// {
// echo $key . ":<br>";
// $another_keys = array_keys($array[$key]);
// foreach($another_keys as $another_key)
// {
// $type = gettype($array[$key][$another_key]);
// if($type != 'array')
// {
// echo($array[$key][$another_key]) . "<br>";
// }
// else
// {
// $deep_keys = array_keys($array[$key][$another_key]);
// echo "<br>";
// echo $another_key . ":<br>";
// foreach($deep_keys as $deep_key)
// {
// echo ($array[$key][$another_key][$deep_key]) ;
// echo "<br>";
// }
// }
// }

// echo "<br>";
// } 
    }
    // displayMultiArr();

    
    function createAssociativeArr(){
        $associativeArr = ["Name" => "Daine", "Age" => "20", "Status" => "Single"];
        foreach($associativeArr as $x => $y){
            echo $x.":".$y." ";
        }
    }
    // displayAssociativeArr();
    


    function addData($arr, $data){
        return array_push($arr, $data);
        foreach($arr as $value){
            echo $value. " ";
        }
    }

    // addData("love");

    

?>
