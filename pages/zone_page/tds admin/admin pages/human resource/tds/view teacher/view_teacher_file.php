<?php

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && $_SESSION['user_role'] == 'ዞን መርሱ ሀላፊ' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == '1') {
    $defaultPath = "../../../../../../../images/tds pp/";
    $ppName = $_SESSION['user_image'];
    $realPath = $defaultPath . $ppName;
?>
    <!doctype html>

    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Users</title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">
        <link rel="stylesheet" href="../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/fixedHeader.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/fixedHeader.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../../../../../../../assets/table/css/main-style.css">
        <link rel="stylesheet" href="../../../../../../../assets/css/style.css">
        <link rel="stylesheet" href="cust_css.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="../../../../admin index.php"><img width="45" height="45" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    </a>
                    <a class="navbar-brand hidden" href="../../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../admin index.php"> <i class="menu-icon fa fa-dashboard"></i><span>ዳሽቦርድ</span> </a>
                        </li>
                        <h3 class="menu-title">አካውንት ተዛማጅ</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ተጠቃሚን ይቆጣጠሩ</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-plus-square"></i><a href="../../../account related/user management/create user account/create account.php">የተጠቃሚ አካውንት ይፍጠሩ</a></li>
                                <li><i class="fa fa-eye"></i><a href="../../../account related/user management/view users/view_user.php">ተጠቃሚ ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>የኔ አካውንት</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../account related/my account/view my account/view my account.php">አካውንቴን ማየት
                                    </a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">ዳታ ተዛማጅ</h3>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-lemon-o"></i> ወረዳ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/woreda/view woreda/view teacher level.php">ወረዳዎችን ይመልከቱ </a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-superpowers"></i><span>ጉድኝት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view association/view association.php"><span>ጉድኝት ማየት</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-american-sign-language-interpreting"></i><span>የትምህርት ቤት ደርጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school level/view level.php"><span>የትምህርት ቤት ደረጃወችን ማየት</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-university"></i><span>ትምህርት ቤት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/school and association/view school/view school.php"><span>ትምህርት ቤቶችን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i><span>የትምህርት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/education_level/view education level/view education level.php"><span>የትምህርት ደረጃን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i><span>የትምህርት አይነት</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/department/view department/view department.php"><span>የትምህርት አይነቶችን ማየት</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i><span>የመምህርነት ደረጃ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/teacher_level/view teacher level/view teacher level.php"><span>የመምህርነት ደረጃውችን ይመልከቱ</span></a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i><span>አቃፊ</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/folder/view folder/view folder.php"><span>አቃፊ ይመልከቱ</span></a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">የሰው ሀይል</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male" style="color: white;"></i><span style="color: white;">መምህር</span></a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye" style="color: white;"></i><a href="../../../human resource/tds/view teacher/view teacher.php"><span style="color: white;">መምህራንን ይመልከቱ</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view director/view director.php">ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>ምክትል ርዕሰ መምህር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../view vice/view vice.php">ምክትል ርዕሰ መምህራንን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>ሱፐርቫይዘር</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye"></i><a href="../../../human resource/tds/view supervisor/view supervisor.php">ሱፐርቫይዘርን ይመልከቱ</a>
                                </li>
                            </ul>
                        </li>



                        <h6 class="menu-title">አበልጻጊ</h6>
                        <li>
                            <a href="../../../extras/developers/developers.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-code" aria-hidden="true"></i>አበልጻጊ</a>
                        </li>



                    </ul>
                </div>
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-compress"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">0</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 0 Notification</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class='user-avatar rounded-circle' src="<?php echo $realPath ?>" alt='User Avatar'>
                            </a>

                            <div class="user-menu dropdown-menu">


                                <a class="nav-link" href="../../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                    My Profile</a>

                                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-et"></i>
                            </a>
                        </div>

                        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                        <script>
                            function loadGoogleTranslate() {
                                new google.translate.TranslateElement({
                                    defaultLanguage: 'en',
                                    pageLanguage: 'en',
                                    includedLanguages: 'en,am',
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                    autoDisplay: false,
                                    multilanguage: true

                                }, 'language-select')
                            };
                        </script>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <!-- logout modal View -->


            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Are you sure ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Hello Estifanos,

                                When logging out you are redirected to a Login page ¿Are you sure…?

                                If you want to stay, click a Cancel button.

                                Thanks.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"><a href="../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal view -->

            <!-- view modal View -->


            <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img class="modal-img" id="image" src="#" alt="" srcset="" draggable="false">
                            <iframe style="width: 100%; height: 100vh; overflow: hidden;" src="" frameborder="0" scrolling="no" class="modal-img-frame" id="pdf"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $connectQuery = mysqli_connect('localhost', 'id20965444_root', '@Stephen12#xampp', 'id20965444_fms');

            $tdsId = $_GET['tds_id'];
            $_SESSION['tds_id'] = $tdsId;
            $folderId = $_GET['folder_id'];
            $_SESSION['folder_id'] = $folderId;

            if (mysqli_connect_errno()) {
                echo mysqli_connect_error();
                exit();
            } else {
                $selectQuery = "SELECT * FROM `file` WHERE folder = '$folderId' AND tds = '$tdsId'";
                $result = mysqli_query($connectQuery, $selectQuery);
                if (mysqli_num_rows($result) > 0) {
                } else {
                    $msg = "No Record found";
                }
            }

            ?>
            <!-- view modal view -->

            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_SESSION['user_zone'] . " " . $_SESSION['user_role']; ?> Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../admin index.php">Dashboard</a></li>
                                <li><a href="./view teacher.php">View Teacher</a></li>
                                <li class="active">View File</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>




            <div class="content mt-3">
                <div>

                    <div>
                        <div class="row position_change">
                            <div class="col-md-8" style="overflow-y: scroll; height:80vh;">


                                <div class="animated fadeIn">
                                    <?php

                                    while ($row = mysqli_fetch_array($result)) {
                                        $count = print_r(mysqli_num_rows($result), true);
                                        $check = false;
                                        if (mysqli_num_rows($result) > 0) {
                                            $check = true;
                                        }
                                        if ($check) {
                                            $base_src = "../../../../../../../file/" . $row["file_path"];
                                            $base_title = $row["file_name"];
                                            if (strpos($base_src, ".pdf") !== false) {
                                                $base_src = "../../../../../../../file/pdf.png";
                                            }

                                            echo '

                                    <a href="#">
                                    <div class="col-md-4">
                                    <img class="gallery-item" style="margin-left: auto; margin-right: auto; display: block;" height="230cm" draggable="false" src="' . $base_src . '" alt="../../../../../../../file/' . $row["file_path"] . ' ">
                                                <div id="box">
                                                    <h5>' . $row["file_name"] . '</h5>
                                                    <p href="#" class="text-sm-left mt-2 mb-1" style="padding-left: 10px;">' . $row["description"] . '</p>
                                                    <p href="#" class="text-sm-center mt-2 mb-1">
                                                        <a href="#" style="color: blue;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a href="#" style="padding-left: 20px; color: red;"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                                        <a href="../../../../../../../file/' . $row["file_path"] . ' " style="padding-left: 20px; color: green;" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                                    </p>
                                                </div>
                                                <hr>
                                    </div>
                                    </a>
                                ';
                                        }
                                        if (!$check) {
                                            echo '

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title pl-2">No file found</strong>
                                            </div>
                                            <div class="card-body">
                                                <div>

                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                                        }
                                    }

                                    ?>

                                </div>
                            </div>

                            <?php

                            $id = $_GET['tds_id'];
                            if (mysqli_connect_errno()) {
                                echo mysqli_connect_error();
                                exit();
                            } else {
                                $teacherQuery = "SELECT tds.tds_id, tds.fname, tds.mname, tds.lname, tds.sex, tds.type, 
                                                tds.birth_date, tds.employment_period, education_level.edu_level_name, 
                                                department.dept_name, teacher_level.level_name, tds.retirement_number, 
                                                school.name, association.asso_name, tds.warranty, tds.salary, tds.phone, 
                                                tds.image, tds.warranter_name, tds.warranter_salary, tds.warranter_photo
                        FROM tds
                        INNER JOIN education_level
                        ON tds.education_level=education_level.lev_id
                        INNER JOIN department
                        ON tds.department=department.dept_id
                        INNER JOIN teacher_level
                        ON tds.teacher_level=teacher_level.level_id
                        INNER JOIN school
                        ON tds.school=school.id
                        INNER JOIN association
                        ON tds.association=association.asso_id WHERE tds.tds_id='$id'";
                                $teacherResult = mysqli_query($connectQuery, $teacherQuery);
                                if (mysqli_num_rows($teacherResult) === 1) {
                                    $teacherRow = mysqli_fetch_array($teacherResult);
                                    $tds_id = $teacherRow["tds_id"];
                                    $fname = $teacherRow["fname"];
                                    $mname = $teacherRow["mname"];
                                    $lname = $teacherRow["lname"];
                                    $sex = $teacherRow["sex"];
                                    $type = $teacherRow["type"];
                                    $birth_date = $teacherRow["birth_date"];

                                    $bd = date('d/m/Y', strtotime($birth_date));
                                    date_default_timezone_set("Africa/Addis_Ababa");
                                    $current_date = date_create();
                                    $current_date_format = date_format($current_date, "d/m/Y");
                                    // $differenc_bd = date_diff($birth_date,$current_date);

                                    $employment_period = $teacherRow["employment_period"];
                                    $ep = date('d/m/Y', strtotime($employment_period));

                                    $education_level = $teacherRow["edu_level_name"];
                                    $department = $teacherRow["dept_name"];
                                    $teacher_level = $teacherRow["level_name"];
                                    $retirement_number = $teacherRow["retirement_number"];
                                    $school = $teacherRow["name"];
                                    $association = $teacherRow["asso_name"];
                                    $warranty = $teacherRow["warranty"];
                                    $salary = $teacherRow["salary"];
                                    $phone = $teacherRow["phone"];
                                    $image = $teacherRow["image"];
                                    $warranterName = $teacherRow["warranter_name"];
                                    $warranterSalary = $teacherRow["warranter_salary"];
                                    $warranterPhoto = $teacherRow["warranter_photo"];

                                    if ($image != null) {
                                        $img_add = "../../../../../../../images/tds pp/" . $image;
                                    } else {
                                        $img_add = "../../../../../../../images/user.png";
                                    }
                                    if ($warranterPhoto != null) {
                                        $warranter_img = "../../../../../../../images/tds pp/" . $warranterPhoto;
                                    } else {
                                        $warranter_img = "../../../../../../../images/user.png";
                                    }
                            ?>
                                    <div class="col-md-4" style="overflow-y: scroll; height:80vh;">

                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" style="height: 3.9cm" src="<?php echo $img_add; ?>" alt="Card image cap">
                                            <div class="location text-sm-center"><b><?php echo $type; ?><i><?php echo ", " . $fname . " " . $mname . " " . $lname; ?></i></b></div>
                                            <div class="location text-sm-left mt-3">Gender<i><strong><?php echo " " . $sex; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Birth Date<i><strong><?php echo " " . $bd; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Employment Period<i><strong><?php echo " " . $ep; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Education Level<i><strong><?php echo " " . $education_level; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Department<i><strong><?php echo " " . $department; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Teacher Level<i><strong><?php echo " " . $teacher_level; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Retirement Number<i><strong><?php echo " " . $retirement_number; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">School<i><strong><?php echo " " . $school; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Association<i><strong><?php echo " " . $association; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Warranty<i><strong><?php echo " " . $warranty; ?></strong></i></div>
                                            <hr>
                                            <div class="location text-sm-left">Salary<i><strong><?php echo " " . $salary; ?> Br</strong></i></div>
                                            <hr>
                                            <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> (251) <?php echo  $phone; ?></div>
                                            <hr class="last_hr">
                                            <p>
                                                <a class="btn btn-primary btn-block" data-toggle="collapse" href="#warranterInformation" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Warranter's Information
                                                </a>
                                            </p>
                                            <div class="collapse" id="warranterInformation">
                                                <div class="card card-body">
                                                    <img class="rounded-circle mx-auto d-block" style="height: 3.9cm" src="<?php echo $warranter_img; ?>" alt="Card image cap">
                                                    <hr>
                                                    <div class="location text-sm-left">Name<i><strong><?php echo " " . $warranterName; ?></strong></i></div>
                                                    <hr>
                                                    <div class="location text-sm-left">Salary<i><strong><?php echo " " . $warranterSalary; ?> Br</strong></i></div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                } else {
                                    $msg = "No Record found";
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->

            <?php
            $selectDefaultFolder = "SELECT file.folder, folder.folder_name FROM file INNER JOIN folder ON file.folder=folder.folder_id WHERE file.folder='$folderId' GROUP BY file.folder";
            $resultDefaultFolder = mysqli_query($connectQuery, $selectDefaultFolder);
            $defaultFolderName = "Default Folder";
            $defaultFolderId = "";
            while ($rowDefaultFolder = mysqli_fetch_array($resultDefaultFolder)) {
                $defaultFolderName = $rowDefaultFolder['folder_name'];
                $defaultFolderId = $rowDefaultFolder['folder'];
            }
            $_SESSION['folder_name'] = $defaultFolderId;

            ?>


            <div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Add file for <?php echo $type; ?><i><?php echo ", " . $fname . " " . $mname; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="add_file_form" class="">

                                <div class="form-group col-md-8">
                                    <div class="input-group">

                                        <?php
                                        include '../getter/get folder.php';

                                        echo "<div class='input-group-addon'><i class='fa fa-sort' aria-hidden='true'></i></div>";
                                        echo "<select name='folder_name' id='folder_id' class='form-control' required>";
                                        echo "<option value='' selected hidden>Default Folder - $defaultFolderName *</option>";
                                        while ($folder_row = mysqli_fetch_array($folder_result)) {
                                            echo "<option value='$folder_row[folder_id]'>$folder_row[folder_name]</option>";
                                        }

                                        echo "</select>";
                                        ?>
                                    </div>
                                </div>

                                <label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" id="list_enable"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                                <label for="list_enable">Change Default Folder</label>

                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                                            <input type="text" id="file_name_id" name="file_name_name" placeholder="File Name *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></div>
                                            <input type="text" id="description_id" name="description_name" placeholder="Description . . ." class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                                            <input class="form-control" type="file" id="file_id" name="file_name" accept=".png,.jpg,.jpeg,.pdf" required>
                                        </div>
                                    </div>





                                </div>

                                <div class="form-actions form-group">
                                    <button type="reset" class="btn btn-danger btn-md">Clear</button>
                                    <button type="submit" id="submit" class="btn btn-success btn-md">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
        <script src="../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../../../../../assets/js/main.js"></script>
        <script src="../../../../../../../assets/table/js/jquery-3.5.1.js"></script>
        <script src="../../../../../../../vendors/sweetalert/sweetalert2@11.js"></script>
        <script src="../../../../../../../vendors/jquery/dist/jquery.validate.js"></script>
        <script src="../../../../../../../assets/table/js/jquery.dataTables.min.js"></script>
        <script src="../../../../../../../assets/table/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../../../../../asfsets/table/js/dataTables.fixedHeader.min.js"></script>
        <script src="../../../../../../../assets/table/js/dataTables.buttons.min.js"></script>
        <script src="../../../../../../../assets/table/js/jszip.min.js"></script>
        <script src="../../../../../../../assets/table/js/pdfmake.min.js"></script>
        <script src="../../../../../../../assets/table/js/vfs_fonts.js"></script>
        <script src="../../../../../../../assets/table/js/buttons.html5.min.js"></script>
        <script src="../../../../../../../assets/table/js/buttons.print.min.js"></script>
        <script src="../../../../../../../assets/table/js/main.js"></script>
        <script src="add file.js"></script>
        <script>
            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("gallery-item")) {
                    const src = e.target.getAttribute("src");
                    const alt = e.target.getAttribute("alt");
                    const image = document.getElementById("image");
                    const pdf = document.getElementById("pdf");

                    if (alt.includes(".pdf")) {
                        document.querySelector(".modal-img-frame").src = alt + "#toolbar=0";
                        console.log(alt);

                        pdf.style.display = "block";
                        image.style.display = "none";
                    } else {
                        document.querySelector(".modal-img").src = src;
                        image.style.display = "block";
                        pdf.style.display = "none";
                    }
                    const myModal = new bootstrap.Modal(document.getElementById('viewModal'));

                    myModal.show();
                }
            })

            $(document).ready(function() {
                $('body').bind('cut copy paste print', function(e) {
                    e.preventDefault();
                })
                $("body").on("contextmenu", function(e) {
                    return false;
                })
                document.onkeydown = function(e) {
                    if (event.keyCode == 123) {
                        return false;
                    }

                    // if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
                    //     return false;
                    // }

                    if (e.ctrlKey && e.shiftKey && e.keyCode == "C".charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
                        return false;
                    }

                }

                var disabled = false;
                $("#folder_id").prop('disabled', true); // if enabled, disable
                $('#list_enable').click(function() {
                    if (disabled) {
                        $("#folder_id").prop('disabled', true); // if enabled, disable
                        $("#folder_id").val("");
                    } else {
                        $("#folder_id").prop('disabled', false); // if disabled, enable
                    }
                    disabled = !disabled;
                })
            })
        </script>
    </body>

    </html>


<?php

} else {
    header("location: ../../../../../../../authentication/login.php");
}

?>