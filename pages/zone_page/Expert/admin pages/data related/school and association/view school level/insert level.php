<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$levelName = ($_POST['school_level_name']) ? $_POST['school_level_name'] : '';

$sql = "INSERT INTO school_level(level_name) VALUES('$levelName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
