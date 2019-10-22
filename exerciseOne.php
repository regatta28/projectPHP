<?php

// Making Variables

$performer = "Kelvin Hart";
$country = "dubai";
$performanceDate = "4th April 2016";

$performerAge = 30;
$ageMin = 18;
$ageMax = 49;

//Associative Array

$AssociativeArrayPerformer = array("Fullname" => "Kelvin Hart", "Height" => "5 Inches", "Age" => "30");

echo $AssociativeArrayPerformer[Height];
echo "<br><br>";
if($performerAge <= $ageMin){
    echo "Performer is too young";
}elseif($performerAge >= $ageMax){
    echo "Performer is too old";
}else{
    echo "Performer is apropriate age";
}













?>