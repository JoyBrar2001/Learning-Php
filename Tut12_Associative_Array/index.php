<?php
    $capitals = array("USA" => "Washington D.C.",
                      "Japans" => "Kyoto",
                      "South Korea" => "Seoul",
                      "India" => "New Delhi");

    $capitals["USA"] = "New York";
    $capitals["China"] = "Beijing";

    foreach($capitals as $key => $value){
        echo "{$key} => {$value} <br>";
    }
?>