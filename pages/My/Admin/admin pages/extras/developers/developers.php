

<?php


session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) == 'Regional Admin' && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == "1") {
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developers </title>
    <meta name="description" content="TDS | Admin Panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./apple-icon.png">
    <link rel="shortcut icon" href="./favicon.ico">


    <link rel="stylesheet" href="../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../../vendors/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css"> -->
    <link rel="stylesheet" href="../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="../../vendors/selectFX/css/cs-skin-elastic.css"> -->

    <link rel="stylesheet" href="../../../../../../assets/css/style.css">

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

                <a class="navbar-brand" href="../../../admin index.php"><img width="45" height="45" src="../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                </a>
                <a class="navbar-brand hidden" href="../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../../admin index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User Management</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-plus-square"></i><a href="../../account related/user management/create user account/create account.php">Create User Account</a></li>
                            <li><i class="fa fa-eye"></i><a href="../../account related/user management/view users/view_user.php">View Users</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-eye" style="color: white;"></i><a href="../../account related/my account/view my account/view my account.php">View
                                    my account</a></li>
                            <li><i class="fa fa-pencil-square-o"></i><a href="../../account related/my account/update my account/update my account.php">Update my
                                    account</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Data Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Zone and Woreda</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../data related/zone and woreda/add zone/add zone.php">Add</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../data related/zone and woreda/update zone/update zone.php">Update</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/zone and woreda/view zone/view zone.php">View zone</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../data related/zone and woreda/view woreda/view woreda.php">View Woreda</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-exchange"></i>Transfer
                            </span></a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-step-backward"></i><a href="../../data related/transfer/before computed/before_computed.php"> Before Computed </a></li>
                            <li><i class="fa fa-step-forward"></i><a href="../../data related/transfer/after computed/after_computed.php"> After Computed
                                    </span></a></li>
                        </ul>

                    </li>

                    <h3 class="menu-title">Resource Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-rebel"></i>Resource</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../resource related/resources/add resources/add resources.php">Add Resource</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../resource related/resources/view resources/view resources.php">View Resource</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li>
                        <a href="./developers.php"> <i class="menu-icon fa fa-file-code-o" style="color: white;"> </i><span style="color: white;">Developers</span> </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
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
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-4" href="../../data related/transfer/before computed/before_computed.php">
                                    <i class="fa fa-check"></i>
                                    <p style="color: black;">Transfer data inserted</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="../../data related/transfer/after computed/after_computed.php">
                                    <i class="fa fa-info"></i>
                                    <p style="color: black;">View transfer result</p>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../../../../../images/admin image/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">


                            <a class="nav-link" href="../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
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
                        <button type="button" class="btn btn-primary"><a href="../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- logout modal view -->
 
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin's Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="../../../admin index.php">Dashboard</a></li>
                          
                            <li class="active">Developers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="../../../../../../images/admin image/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Estifanos Aschale</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Bahir Dar, Ethiopia</div>
                                    <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> (251) 123 4567</div>
                                    <div class="location text-sm-center"><i class="fa fa-envelope" aria-hidden="true"></i> estifanosaschale12@gmail.com</div>
                                </div>
                                <hr>
                                <div class="twt-write col-sm-12">
                                    <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                                </div>
                                <hr>
                                <div class="card-text text-lg-center">
                                    <h5 style="opacity: 60%;">contact us</h5>
                                </div>
                                <div class="card-text text-lg-center">
                                    <a href="https://t.me/StephenAs"><i class="fa fa-telegram pr-2 fa-lg" style="color: #229ED9;"></i></a>
                                    <a href="https://www.facebook.com/Stephen.Asc"><i class="fa fa-facebook-square pr-2 fa-lg" style="color: #4267B2;"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square pr-2 fa-lg" style="color: #0e76a8;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="../../../../../../images/admin image/adminn.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Nigussie Sefinew</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Bahir Dar, Ethiopia</div>
                                    <div class="location text-sm-center"><i class="fa fa-mobile" aria-hidden="true"></i> (251) 232 2708</div>
                                    <div class="location text-sm-center"><i class="fa fa-envelope" aria-hidden="true"></i> nigussiesefinew.40@gmail.com</div>
                                </div>
                                <hr>
                                <div class="twt-write col-sm-12">
                                    <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                                </div>
                                <hr>
                                <div class="card-text text-lg-center">
                                    <h5 style="opacity: 60%;">contact us</h5>
                                </div>
                                <div class="card-text text-lg-center">
                                    <a href="https://t.me/ababimami"><i class="fa fa-telegram pr-2 fa-lg" style="color: #229ED9;"></i></a>
                                    <a href="https://www.facebook.com/nigussie.seng"><i class="fa fa-facebook-square pr-2 fa-lg" style="color: #4267B2;"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square pr-2 fa-lg" style="color: #0e76a8;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>





                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../../../../../../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../../../../assets/js/main.js"></script>


</body>

</html>
<?php

} 


else {
    header("location: ../../../authentication/login.php");
}

?>