
		<?php
        $conn = mysqli_connect("localhost", "id20965444_root", "@Stephen12#xampp", "id20965444_fms");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $association_result = mysqli_query($conn, "SELECT * FROM association");

        ?>