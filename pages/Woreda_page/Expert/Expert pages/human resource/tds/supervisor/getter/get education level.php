
		<?php





$conn = mysqli_connect("localhost", "id20965444_root", "@Stephen12#xampp", "id20965444_fms");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$education_level_result = mysqli_query($conn, "SELECT * FROM education_level");



?>