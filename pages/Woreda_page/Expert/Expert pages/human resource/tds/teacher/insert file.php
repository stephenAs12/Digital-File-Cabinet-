
<?php
session_start();

$connect =  mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

if (isset($_POST['folder_name'])) {
    $folder_name = $_POST['folder_name'];
} else {
    $folder_name = $_SESSION['folder_name'];
}

$folderName       = $folder_name;
$fileName       = (htmlspecialchars(stripslashes($_POST['file_name_name']))) ? htmlspecialchars(stripslashes($_POST['file_name_name']))  : '';
$description       = (htmlspecialchars(stripslashes($_POST['description_name']))) ? htmlspecialchars(stripslashes($_POST['description_name']))  : '';
$image       = $_FILES["file_name"]["name"];
$tdsId = '';
$registered_by = $_SESSION['user_full_name'];

$find_sql = "SELECT * FROM tds WHERE registered_by='$registered_by' ORDER BY tds_id DESC LIMIT 1";
$result = mysqli_query($connect, $find_sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tdsId = $row['tds_id'];
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $kent = $row['kent'];
    }
}



$sql = "INSERT INTO file(folder, tds, file_name, description, file_path) VALUES ('$folderName', '$tdsId', '$fileName','$description', '$image')";


$pname = keygen() . "-" . $fname . "-" . $mname . "-" . $lname . "-" . "id" . $tdsId . "-" . $_FILES["file_name"]["name"];

$tname = $_FILES["file_name"]["tmp_name"];

$uploads_dir = '../../../../../../../file/';

$imageFileType = strtolower(pathinfo($pname, PATHINFO_EXTENSION));
$sql = "INSERT INTO file(folder, tds, file_name, description, file_path) VALUES ('$folderName', '$tdsId', '$fileName','$description', '$pname')";

if ($_FILES["file_name"]["size"] <= 10000000000) {
    if ($imageFileType == "pdf" || $imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
        if (mysqli_query($connect, $sql)) {
            move_uploaded_file($tname, $uploads_dir . '/' . $pname);
            echo true;
        } else {
            echo "Unknown Error Occurred";
        }
    } else {
        echo "file must be pdf, jpg, jpeg, png";
    }
} else {
    echo "file size must be less than 5mb";
}


function keygen($length = 20)
{
    $key = '';
    list($usec, $sec) = explode(' ', microtime());
    mt_srand((float) $sec + ((float) $usec * 100000));

    $inputs = array_merge(range('z', 'a'), range(0, 9), range('A', 'Z'));
    for ($i = 0; $i < $length; $i++) {
        $key .= $inputs{
            mt_rand(0, 61)};
    }
    return $key;
}