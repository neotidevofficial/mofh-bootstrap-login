<!--
                                                                               
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
                                                                                      
-->
<?php
    $domain = preg_replace('/^www\./' , '' , $_SERVER['HTTP_HOST']);
    ?>
<!DOCTYPE html>
<html>
    <!-- MOFH Bootstrap Login Template by NeotiDev (LIGHT)-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - <?php echo ucfirst($domain);?></title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="login-clean">
            <form action="https://cpanel.<?php echo $domain;?>/login.php" method="post" name="login">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration">
                    <i class="icon ion-ios-cloudy-night" style="color:rgb(9,124,94);"></i>
                    <!-- Change "Login" below to your desired heading-->
                    <h4 style="color:rgb(84,81,81);">Login</h4>
                </div>
                <!-- 
                Begin login input fields.
                The fields must be properly formatted in order for it to work.
                Proper formatting can be found at : http://panel.myownfreehost.net/panel/index2.php?option=remotelogin

                Please replace the value for input with name "uname" from "neotidev_" to your reseller's placeholder
                -->
                <div class="form-group">
                    <input class="form-control" type="text" name="uname" placeholder="Username" value="neotidev_">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="passwd" placeholder="Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" value="Login" style="background-color:rgb(9,124,94);">Log
                    In</button>
                </div>
                <!-- End login input fields -->
                <a href="signup.php" class="forgot">Don't have an account yet?</a>
                <br>
                <a href="https://cpanel.<?php echo $domain;?>/lostpassword.php" class="forgot">Forgot your password?</a>
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
