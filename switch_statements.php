<?php
$cars="lambo";

switch ($cars) {
    case "Benz":
        echo "I like benzs";
        break;
    case "supra":
        echo "I like supras";
        break;
    case "Toyota";
        echo "I like Toyota Cars";
        break;
    case "Nissan":
        echo "I like Nissan Cars";
        break;
    default:
        echo "Nice try kid";
}

echo "<br>";
echo "<br>";
echo "<br>";

$marks=30;

switch ($marks){
    case ($marks>=90 and $marks<=100);
        echo "Excellent";
        break;
    case ($marks<=89 and $marks>=79):
            echo "Good";
            break;
    case ($marks>=60 and $marks<=70):
            echo "Pass";
            break;
    default:
            echo "Fail";
}



