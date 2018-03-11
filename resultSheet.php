<?php
require_once("db/addfile.php");
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

    <title>Add Question</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="js/admin.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="admin.php" class="site_title">
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
                    <i class="fa fa-home"></i> Quiz Section
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="addquestion.php">Add Question</a>
                    </li>
                    <li>
                      <a href="addevent.php">Event addition</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-home"></i> Result Section
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <!-- <a href="addquestion.php">Search Participant</a> -->
                    </li>
                    <li>
                      <a href="resultSheet.php">Result Sheet</a>
                    </li>
                  </ul>
                </li>
              </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
            <div class="right_col" role="main">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Result Sheet</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="db/getResult.php"  target="_blank" method="get" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Event</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control Resultevents" name="Resultevents">
                                        <option selected>Select Event</option>
                                        <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="write-question">Event Round</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input id="round" name="round" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                                    <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                                    <button type="submit" class="btn btn-success Resultbutton">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <br />
            </div>
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