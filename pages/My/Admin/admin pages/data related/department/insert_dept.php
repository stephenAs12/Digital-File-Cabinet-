<?php 
    
    $connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

    $department = ($_POST['department']) ? $_POST['department'] : '';
    
    $sql = "INSERT INTO department(dept_name) VALUES('$department')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
