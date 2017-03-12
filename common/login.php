<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebAdmin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">

    <!-- j:uery  -->
    <script src="js/jquery.min.js"></script>
    <!-- string.js -->
    <script src="js/string.min.js"></script>

    <!-- aplex javascript -->
    <script src="js/aplex/common.js"></script>
    <script src="js/aplex/login.js"></script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>WebAdmin</h1>
              <div>
                <input name="username" onkeydown="jumpNextId('passwd')" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input id="passwd" name="passwd" onkeydown="jumpLogin('login')" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a id="login" class="btn btn-default submit" href="javascript:void(0)" onclick="login()">Log in</a>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <!-- <h1><i class="fa fa-paw"></i> Aplex </h1> -->
                  <p>©2017 All Rights Reserved. Designed by AplexOS Team. </p>
                  <p>Used Gentelella Alela Template</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
