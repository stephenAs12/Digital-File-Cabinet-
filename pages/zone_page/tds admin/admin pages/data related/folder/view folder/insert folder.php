<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$folderName = ($_POST['folder_name']) ? $_POST['folder_name'] : '';

$sql = "INSERT INTO folder(folder_name) VALUES('$folderName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
