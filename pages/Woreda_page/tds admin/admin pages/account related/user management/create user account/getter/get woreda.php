
		<?php



        $zone_id = $_SESSION['user_zone_id'];

        $conn = mysqli_connect("localhost", "id20965444_root", "@Stephen12#xampp", "id20965444_fms");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $woreda_result = mysqli_query($conn, "SELECT * FROM woreda WHERE z_id=$zone_id");



        ?>