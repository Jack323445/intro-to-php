<?php
//Indexed array

$name=array("Jack","Sparrow","Jane","Mickey","Leo");

echo"My name is $name[0]";
echo "<br>";
echo "My name is ".$name[0]." and my friends name is ".$name[1];



echo "<br>";
//loop through an indexed array
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

//associative array


$name=array("Jack"=>"91");
echo   "Jack is $name[Jack]";
echo "<br>";
$boards[0]="thrashermeg";
$boards[1]="dirt";
$boards[2]="meg" ."<br>";
echo" My fav board is " .$boards[0];


echo "<br>";

//multidimensional arrays

$cars=array(
    array("Benz",11,11),
    array("supra",22,22),
    array("monster",33,33),
    array("mustang",444,444)
);


echo $cars[0][0]."In stock:".$cars[0][1].",Sold:".$cars[0][2]."<br>";
echo $cars[1][0]."In stock:".$cars[1][1].",sold:".$cars[1][2]."<br>";
echo $cars[2][0]."In stock:".$cars[2][1].",sold".$cars[2][2]."<br>";


//sorting arrays
rsort($cars);


