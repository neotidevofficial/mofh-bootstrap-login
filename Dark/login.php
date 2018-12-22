 <?PHP
     $yourdomain = $_SERVER['HTTP_HOST'];
     $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
     $yourdomain = ucfirst($yourdomain);
 ?>
<!DOCTYPE html>
<!-- MOFH Bootstrap Login Template by NeotiDev (DARK)-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Replace the contents of <title> with your preferred title-->
    <title>Login - <?echo $yourdomain;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-dark" style="background-image:url(&quot;assets/img/purple-low-poly-by-quietluck-d8m7fcp-1920x1080.png&quot;);">

        <form action="https://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fa fa-cloud" style="color:rgb(254,254,254);"></i>
              <!-- Change "Login" below to your desired heading-->
                <h4 style="color:rgb(254,254,254);">Login</h4>
            </div>
      <!-- BEGIN MOFH API, BE CAREFUL WHEN EDITING-->
			<!-- Replace neoti_ with your reseller's placeholder-->
           <div class="form-group"><input class="form-control" type="text" id="mod_login_username" name="uname" placeholder="neoti_"></div>
			<!-- BEGIN MOFH API CONTENT, BE CAREFUL WHEN EDITING-->
		<!--Replace "neotidev_" bellow with your reseller account prefix-->
            <div class="form-group"><input class="form-control" type="text" id="mod_login_username" name="uname" placeholder="neotidev_"></div>
            <div class="form-group"><input class="form-control" type="password" id="mod_login_password" name="passwd" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="Login" style="background-color:rgb(126,11,180);">Log In</button></div><a href="signup.php" class="forgot">Don't have an account yet?</a><br><a href="https://cpanel.<?echo $yourdomain;?>/lostpassword.php" class="forgot">Forgot your password?</a></form>
			<!--END MOFH API CONTENT, it is now safe to edit-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
