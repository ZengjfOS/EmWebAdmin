<!DOCTYPE html>
<html lang="en">
  <!-- Smarty lib -->
  <?php require('tpl/SmartySetup.php'); ?>
  <!-- /Smarty lib -->

  <!-- head -->
  <head>
  <?php $smarty->display('tpl/head.tpl'); ?>

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
        <?php $smarty->display('tpl/nav.tpl'); ?>
        <!-- /left content -->

        <!-- right content -->
        <?php $smarty->display('tpl/********'); ?>
        <!-- /right content -->

        <!-- footer content -->
        <?php $smarty->display('tpl/foot.tpl'); ?>
        <!-- /footer content -->

      </div>
    </div>

  <!-- JavaScript -->
  <?php include('tpl/tail.tpl'); ?>
  <?php include('customjs.php'); ?>
  <!-- /JavaScript -->
	
  </body>
</html>
