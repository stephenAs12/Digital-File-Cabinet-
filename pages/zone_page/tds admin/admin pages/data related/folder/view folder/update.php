<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

$folderId = $_SESSION['folderId'];
$folderName = ($_POST['folder_name']) ? $_POST['folder_name'] : '';

if ($folderId == '') {
    echo "Something was wrong";
} else {
    if ($folderName != '') {
        $sql = "UPDATE `folder` SET `folder_name`='$folderName' WHERE folder_id='$folderId'";
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}
