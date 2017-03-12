<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>WebAdmin</span></a>
    </div>

    <div class="clearfix"></div>
    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Welcome Here</h3>
        <ul class="nav side-menu">
          <li <?php if (end(explode('/', $_SERVER['PHP_SELF'])) == 'index.php') echo "class='active'"; ?> ><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
              <li><a><i class="fa fa-cogs"></i> System Settings <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="network.php"><i class="fa fa-sitemap"></i>Network</a></li>
                  <li><a href="dataAndCalander.php"><i class="fa fa-calendar"></i>Time & Calander</a></li>
                  <li><a href="update.php"><i class="fa fa-undo"></i>Update System</a></li>
                  <li><a href="webconsole.php"><i class="fa fa-terminal"></i>Terminal</a></li>
                  <li><a href="update.php"><i class="fa fa-lock"></i>Root Passwd</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-legal"></i> HardWare Status <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="hardware.php"><i class="fa fa-arrows-h"></i>Input&Output</a></li>
                  <li><a href="hardware.php#Serial"><i class="fa fa-tty"></i>Serial(tty)</a></li>
                  <li><a href="hardware.php#USBPort"><i class="fa fa-usb"></i>USB Port</a></li>
                </ul>
              </li>
              <li><a href="customerSettings.php"><i class="fa fa-wrench"></i>Customer Settings</a></li>
              <li><a href="customerData.php"><i class="fa fa-pie-chart"></i>Customer Data</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-book"></i> About <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="about.php"><i class="fa fa-copyright"></i>WebAdmin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
  </div>
</div>

