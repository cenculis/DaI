<?php
include_once('resources/init.php');

if(!isset($_GET['id'])){
    header("Location:indexx.php");
    die();
}


  global $conn;

    $id    = $_GET['id'];
    
    mysqli_query($conn,"DELETE FROM blog.`posts` WHERE `id`= {$id} ");
    

header("Location:manage_post.php");
die();