<?php
    include_once('config.php');

    $id = $_GET['id'];

    $result = mysqli_query($con , "DELETE from persons where id=$id");

    if($result){
        header('location:show.php');
    }else{
        echo 'delete error';
    }
?>