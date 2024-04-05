<?php




    include("../assets/database/db_connect.php");
    if (!isset($_GET["code"])) {
        header("Location: forgot_password.php?error=Can't find page");
        exit("Can't find page");
        
    }

    $code = $_GET["code"];

    $getEmailQuery = mysqli_query($con, "SELECT email FROM forgot_password WHERE code='$code'");
    if (mysqli_num_rows($getEmailQuery) == 0) {
        header("Location: login.php?error=Can't find the page using this mail, Use the latest one");
        exit("Can't find page");
        
    }

    if (isset($_POST["password"])) {
        $pw = $_POST["password"];
        $pw=password_hash($pw, PASSWORD_DEFAULT);

        $row = mysqli_fetch_array($getEmailQuery);
        $email = $row["email"];

        $query = mysqli_query($con, "UPDATE user SET password='$pw' WHERE email='$email'");

        if ($query) {
            $query = mysqli_query($con, "DELETE FROM forgot_password WHERE email='$email'");
            header("Location: login.php?success=Password Changed");
            exit("Password Changed");
            
        }
        else{
            header("Location: forgot_password.php?error=Something was wrong");
            exit("Something was wrong");
            
        }
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login System PHP</title>
    <link rel="stylesheet" href="./../vendors/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow" method="post" style="width: 30rem">
            <h1 class="text-center pb-5 display-8">NEW PASSWORD</h1>

            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= htmlspecialchars($_GET['success']) ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">New Password
                </label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">FORGOT

            </button>
        </form>
    </div>
</body>

</html>