<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$departmentId = $_SESSION['departmentId'];
$departmentName = ($_POST['department_name']) ? $_POST['department_name'] : '';

if ($departmentId == '') {
    echo "Something was wrong";
} else {
    if ($departmentName != '') {
        $sql = "UPDATE `department` SET `dept_name`='$departmentName' WHERE dept_id='$departmentId'";
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
