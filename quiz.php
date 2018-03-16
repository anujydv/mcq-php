<?php
require_once("db/questiondisplay.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Quiz Panel</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="js/admin.js"></script>
    <?php
    require_once("db/timingScript.php");
    ?>
    <style>
        label{
            font-size:16px;
        }
        p.timer{
            font-size:18px;
        }
        .countdown{
            font-weight:900;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="quiz.php" class="site_title">
                            <i class="fa fa-paw"></i>
                            <span>Ecell Kiet</span>
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a>
                                        <i class="fa fa-home"></i> Home
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li class="active">
                                            <a href="quiz.php">Quiz</a>
                                        </li>
                                        <li class="active">
                                            <a href="result.php">Answer Key</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <?php            
            if(isset($_SESSION['quiz_status']) && $_SESSION['quiz_status']==1){
                echo "<div class='right_col' role='main'>";
                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert' style='margin-top:50px;'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    Submited
                  </div>";
                  echo "</div>";
            }
            else{
                include_once("pages/quiz.txt");                
            }
            ?>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    <a href="https://ecell.com">Ecell KIET</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <script src="js/admin.js"></script>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

</body>

</html>