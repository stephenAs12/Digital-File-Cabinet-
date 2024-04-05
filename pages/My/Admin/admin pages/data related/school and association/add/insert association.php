<?php 
    
    $connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

    $associationName = ($_POST['association_name']) ? $_POST['association_name'] : '';
    
    $sql = "INSERT INTO association(asso_name) VALUES('$associationName')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
