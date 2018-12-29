/*
                                                                               
         ,--.                                                                         
       ,--.'|                        ___                ,---,                         
   ,--,:  : |                      ,--.'|_    ,--,    .'  .' `\                       
,`--.'`|  ' :             ,---.    |  | :,' ,--.'|  ,---.'     \                      
|   :  :  | |            '   ,'\   :  : ' : |  |,   |   |  .`\  |               .---. 
:   |   \ | :   ,---.   /   /   |.;__,'  /  `--'_   :   : |  '  |   ,---.     /.  ./| 
|   : '  '; |  /     \ .   ; ,. :|  |   |   ,' ,'|  |   ' '  ;  :  /     \  .-' . ' | 
'   ' ;.    ; /    /  |'   | |: ::__,'| :   '  | |  '   | ;  .  | /    /  |/___/ \: | 
|   | | \   |.    ' / |'   | .; :  '  : |__ |  | :  |   | :  |  '.    ' / |.   \  ' . 
'   : |  ; .''   ;   /||   :    |  |  | '.'|'  : |__'   : | /  ; '   ;   /| \   \   ' 
|   | '`--'  '   |  / | \   \  /   ;  :    ;|  | '.'|   | '` ,/  '   |  / |  \   \    
'   : |      |   :    |  `----'    |  ,   / ;  :    ;   :  .'    |   :    |   \   \ | 
;   |.'       \   \  /              ---`-'  |  ,   /|   ,.'       \   \  /     '---"  
'---'          `----'                        ---`-' '---'          `----'             
                                                                                      
*/
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
    <title>Login - <?echo $yourdomain;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form action="https://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-cloudy-night" style="color:rgb(9,124,94);"></i>
			<!-- Change "Login" below to your desired heading-->
                <h4 style="color:rgb(84,81,81);">Login</h4>
            </div>
			<!-- BEGIN MOFH API, BE CAREFUL WHEN EDITING-->
			<!-- Replace neotidev_ with your reseller's placeholder-->
           <div class="form-group"><input class="form-control" type="text" id="mod_login_username" name="uname" placeholder="neoti_"></div>
            <div class="form-group"><input class="form-control" type="password" id="mod_login_password" name="passwd" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="Login" style="background-color:rgb(9,124,94);">Log
              In</button></div><a href="signup.php" class="forgot">Don't have an account yet?</a><br><a href="https://cpanel.<?echo $yourdomain;?>/lostpassword.php" class="forgot">Forgot your password?</a></form>
			<!--END MOFH API, it is now safe to edit-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>

</html>
