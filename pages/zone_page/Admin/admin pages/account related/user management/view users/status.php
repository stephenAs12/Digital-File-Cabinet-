<?php
    $connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');
    $id=$_GET['id'];
    $status=$_GET['status'];

    $query="UPDATE user SET status=$status WHERE id=$id";

    mysqli_query($connect, $query);
    header('location:view_user.php');

?>