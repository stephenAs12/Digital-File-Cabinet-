<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$departmentName = ($_POST['department_name']) ? $_POST['department_name'] : '';

$sql = "INSERT INTO department(dept_name) VALUES('$departmentName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
