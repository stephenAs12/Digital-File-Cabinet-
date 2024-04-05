<?php 
    
    $connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

    $teacher_level = ($_POST['teacher_level']) ? $_POST['teacher_level'] : '';
    
    $sql = "INSERT INTO teacher_level(level_name) VALUES('$teacher_level')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
