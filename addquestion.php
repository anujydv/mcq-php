<?php
session_start();
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
                      <a href="addevent.php">Event Addition</a>
                    </li>
                    <li>
                      <a href="createUser.php">Create User</a>
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
            <div class="right_col" role="main">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Question</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
            if(isset($_SESSION['addques'])){
                if($_SESSION['addques'] == 1){
             echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    Add Success Fully
                  </div>";
                }
                else{
                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    Some Error occurred !
                  </div>";
            }
            }
            ?>
                        <br />
                        <form action="db/questionadd.php" target="_self" method="post" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Event</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control events" name="events">
                                        <option selected>Select Event</option>
                                        <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="write-question">Event Round</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" min="1" max="3" size="1" id="round" name="round" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="write-question">Write question</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="question" name="question" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Option A</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="option_a" required="required" class="form-control col-md-7 col-xs-12" type="text" name="option_a"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Option B</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="option_b" required="required" class="form-control col-md-7 col-xs-12" type="text" name="option_b"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Option C</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="option_c" required="required" class="form-control col-md-7 col-xs-12" type="text" name="option_c"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Option D</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="option_d" required="required" class="form-control col-md-7 col-xs-12" type="text" name="option_d"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Correct Answer</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control events" name="ans">
                                        <option selected>Select Correct Answer</option>
                                        <option value="1" >A</option>
                                        <option value="2" >B</option>
                                        <option value="3" >C</option>
                                        <option value="4" >D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hint">
                                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hint">Hint</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="hint" required="required" class="form-control col-md-7 col-xs-12" type="text" name="hint"></textarea>
                                </div> -->
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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