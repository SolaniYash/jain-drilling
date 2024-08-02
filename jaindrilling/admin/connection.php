<?php

$hostname="localhost";
$username="root";
$password="";
$db="jaindrilling";

$conn=mysqli_connect($hostname,$username,$password,$db);

if(!$conn){
    echo "Not Connected";
}

?>