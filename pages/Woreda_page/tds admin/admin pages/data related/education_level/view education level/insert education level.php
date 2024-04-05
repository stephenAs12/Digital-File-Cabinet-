<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$educationLevelName = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';

$sql = "INSERT INTO education_level(edu_level_name) VALUES('$educationLevelName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
