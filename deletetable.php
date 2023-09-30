<?php
 include 'connection.php';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    //echo $id;
    $sql="delete from `point_table` where Club_Id=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:pointable.php');
    }
 }
?>