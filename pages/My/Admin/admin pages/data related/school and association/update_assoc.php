<?php 
    
    $connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');
    
    $update_assoc = ($_POST['association_name']) ? $_POST['association_name'] : '';
    $id=$GET['updateid'];
    
    $sql = "UPDATE 'association' set id=$id, association_name=$update_assoc where id=$id";
    $result=mysqli_query($connect,$sql);
    if($result)
    {
        echo "updated succefuly";

    }
    else{
        die(mysqli_error($connect));
    }
    ?>

