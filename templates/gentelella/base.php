<!DOCTYPE html>
<html lang="en">
  <?php require('tpl/setup.php'); ?>
  <!-- head -->
  <?php $smarty->display('tpl/head.php'); ?>
  <!-- /head -->

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
  <?php $smarty->display('tpl/tail.php'); ?>
  <!-- /JavaScript -->
	
  </body>
</html>
