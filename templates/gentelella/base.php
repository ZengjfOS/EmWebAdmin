<!DOCTYPE html>
<html lang="en">
  <?php require('tpl/SmartySetup.php'); ?>

  <!-- config -->
  <?php include('config.php'); ?>
  <!-- /config -->

  <!-- head -->
  <head>
  <?php $smarty->display('tpl/head.php'); ?>

  <!-- aplex css js file -->
  <?php include('customcss.php'); ?>
  </head>
  <!-- /head -->

  <!-- session -->
  <?php include('session.php'); ?>
  <!-- /session -->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- left content -->
        <?php $smarty->display('tpl/nav.php'); ?>
        <!-- /left content -->

        <!-- right content -->
        <?php $smarty->display('tpl/********'); ?>
        <!-- /right content -->

        <!-- footer content -->
        <?php $smarty->display('tpl/foot.php'); ?>
        <!-- /footer content -->

      </div>
    </div>

  <!-- JavaScript -->
  <?php include('tpl/tail.php'); ?>
  <?php include('customjs.php'); ?>
  <!-- /JavaScript -->
	
  </body>
</html>
