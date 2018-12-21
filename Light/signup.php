<?PHP
$id = md5(rand(6000,PHP_INT_MAX)); //Necessary for captcha, DO NOT REMOVE
?>
<?PHP
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    $yourdomain = ucfirst($yourdomain);
?>
<!DOCTYPE html>
<html>
<!-- MOFH Bootstrap Login Template by NeotiDev (LIGHT)-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - <?echo $yourdomain;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form action="https://securesignup.net/register.php" method="post" name="login">
            <h2 class="sr-only">Signup Form</h2>
            <div class="illustration"><i class="icon ion-ios-cloudy-night" style="color:rgb(9,124,94);"></i>
			<!-- Change "Sign Up" below to your desired heading-->
                <h4 style="color:rgb(84,81,81);">Sign Up</h4>
            </div>
			<!-- BEGIN MOFH API, BE CAREFUL WHEN EDITING-->
            <div class="form-group"><input class="form-control" type="text" id="mod_signup_username" name="username" placeholder="Site Name"></div>
            <div class="form-group"><input class="form-control" type="password" id="mod_signup_password" name="password" placeholder="Password"></div>
			<div class="form-group"><input class="form-control" type="text" id="mod_signup_email" name="email" placeholder="Email Address"></div>
			<div class="form-group"><input type=hidden name=id required value="<?PHP echo $id; ?>"><tr><th><td><div ><img width="100%" height="90px" src="https://securesignup.net/image.php?id=<?PHP echo $id; ?>"></div><td><input class="form-control text-align: center;" type="text" name="number" size="30" placeholder="Enter Captcha"><td></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="signup" style="background-color:rgb(9,124,94);">Sign Up</button></div><a href="login.php" class="forgot">Already have an account?</a><br><a href="https://cpanel.<?echo $yourdomain;?>/lostpassword.php" class="forgot">Forgot your password?</a></form>
			<!--END MOFH API, it is now safe to edit-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>

</html>
