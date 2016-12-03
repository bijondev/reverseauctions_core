<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Login page - Typica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML template for Your company">
    <meta name="author" content="Oskar Żabik (oskar.zabik@gmail.com)">

    <!-- Le styles -->
    <link href="<?php echo base_url; ?>public/login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url; ?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url; ?>public/login/css/typica-login.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le favicon -->
    <link rel="shortcut icon" href="favicon.ico">

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"><img src="<?php echo base_url; ?>public/login/logo.png" alt="Typica - Bootstrap Awesome Template!"></a>
        </div>
      </div>
    </div>

    <div class="container">
<?php
if (!empty($_SESSION['login_error'])) {
    echo $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}
?>
        <div id="login-wraper">
            <form class="form login-form" method="post" action="<?php echo base_url; ?>php_action.php" >
                <legend>Sign in to <span class="blue">MyApp</span></legend>

                <div class="body">
                    <label>Username</label>
                    <input type="text" name="_email">
                    
                    <label>Password</label>
                    <input type="password" name="_password">
                </div>
            
                <div class="footer">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Remember me
                    </label>
                                
                    <button type="submit" name="logincheck" class="btn btn-success">Login</button>
                </div>
            
            </form>
        </div>

    </div>

    <footer class="white navbar-fixed-bottom">
      Don't have an account yet? <a href="register.html" class="btn btn-black">Register</a>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url; ?>public/login/js/jquery.js"></script>
    <script src="<?php echo base_url; ?>public/login/js/bootstrap.js"></script>
    <script src="<?php echo base_url; ?>public/login/js/backstretch.min.js"></script>
    <script src="<?php echo base_url; ?>public/login/js/typica-login.js"></script>

  </body>
</html>
