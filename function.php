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
        // foreach($multiArray as $a){
        //     // if($a == $multiArray["sectionA"]){
        //     //     foreach($multiArray["sectionA"] as $a){
        //     //         echo $a . "<br>";
        //     //     }
        //     // }elseif($a == $multiArray["sectionB"]){
        //     //     foreach($multiArray["sectionB"] as $a){
        //     //         echo $a . "<br>";
        //     //     }
        //     // }else{
        //     //     echo $a . "<br>";
        //     // }

        //     foreach($a as $b){
        //         echo $b."<br>";
        //     }
        // }
        print_r($multiArray);
        

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
        array_push($arr, $data);
        foreach($arr as $value){
            echo $value. " ";
        }
    }

    // addData("love");

    

?>
