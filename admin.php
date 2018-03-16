<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Dashboard</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
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
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-user"></i> Total Users</span>
            <div class="count">2500</div>
            <span class="count_bottom">
              <i class="green">4% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-clock-o"></i> Average Time</span>
            <div class="count">123.50</div>
            <span class="count_bottom">
              <i class="green">
                <i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-user"></i> Total Males</span>
            <div class="count green">2,500</div>
            <span class="count_bottom">
              <i class="green">
                <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-user"></i> Total Females</span>
            <div class="count">4,567</div>
            <span class="count_bottom">
              <i class="red">
                <i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-user"></i> Total Collections</span>
            <div class="count">2,315</div>
            <span class="count_bottom">
              <i class="green">
                <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top">
              <i class="fa fa-user"></i> Total Connections</span>
            <div class="count">7,325</div>
            <span class="count_bottom">
              <i class="green">
                <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
        </div>
        <!-- /top tiles -->
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

  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>

</body>

</html>