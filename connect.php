<?php
$myservername="localhost";
$myusername="root";
$mypassword="";
//connect to the database
$connect=new mysqli("localhost","root","","jacksdatabase");
if($connect->connect_error){
    die("It did not connect".$connect->connect_error);
}else{
    echo "Connected successfully";
}

