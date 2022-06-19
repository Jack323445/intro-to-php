<?php
$age=60;
if($age>=0 and $age<=17){
    echo "Child";
}elseif ($age>=18 and $age<=25){
    echo "Young Adult";
}elseif($age>=26 and $age<=50){
    echo "Adult";
}else{
    echo "Old";
}
var_dump(is_int($age));
