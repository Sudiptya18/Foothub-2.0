<?php

$userName='root';
$password='';
$server='localhost';
$db='foothub';

$con= mysqli_connect($server,$userName,$password,$db);

if($con){
    
}
else
    die("No connection".mysqli_connect_error());

?>