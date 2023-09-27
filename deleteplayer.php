<?php
 include 'connection.php';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    //echo $id;
    $sql="delete from `tp` where id=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:myplayer.php');
    }
 }
?>