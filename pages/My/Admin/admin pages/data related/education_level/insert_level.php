<?php 
    
    $connect = mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

    $levelname = ($_POST['level_name']) ? $_POST['level_name'] : '';
    
    $sql = "INSERT INTO education_level(level_name) VALUES('$levelname')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
