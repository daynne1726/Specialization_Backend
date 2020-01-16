<?php
    include "function.php";

    $array = array(1,2,3,4,5);

    $newArray = array("love", "hate", "fear");

    $multiArray = ["food"=>["Go", "Grow", "Glow"], 
    "section"=>[
    "sectionA" => [1 => "daine", 2 =>"nielle", 3 =>"consunji", 4=>"ydhainne", 5=>"elizalde"], 
    "sectionB" => [1 => "Krystal", "Jhamel", "Jeff", "Wenjan", "Christine"]
    ],
    "Ph_Presidents" => ["Aguinaldo", "Roxas", "Duterte"]
    ];

    echo "Answers: <hr><hr>";
    echo getSum(2,4);
    echo "<hr><hr>";
    displayArr($array);
    echo "<hr><hr>";
    displayMultiArr($multiArray);
    echo "<hr><hr>";
    (createAssociativeArr());
    echo "<hr><hr>";
    $newArray = addData($newArray, "loathe");
    ($newArray);
 
?>