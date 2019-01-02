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
    $id = md5(rand(6000, PHP_INT_MAX)); # ID for Catpcha (If removed, the site brokes)
    $domain = preg_replace('/^www\./' , '' , $_SERVER['HTTP_HOST']);
    ?>
<!DOCTYPE html>
<html>
    <!-- MOFH Bootstrap Login Template by NeotiDev (LIGHT)-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up - <?php echo ucfirst($domain);?></title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="login-clean">
            <form action="https://securesignup.net/register.php" method="post" name="login">
                <h2 class="sr-only">Signup Form</h2>
                <div class="illustration">
                    <i class="icon ion-ios-cloudy-night" style="color:rgb(9,124,94);"></i>
                    <!-- Change "Sign Up" below to your desired heading-->
                    <h4 style="color:rgb(84,81,81);">Sign Up</h4>
                </div>
                <!-- 
                Begin signup input fields.
                The fields must be properly formatted in order for it to work.
                Proper formatting can be found by downloading any templates on http://myownfreehost.net/templatedemos.php and check the signup.php file.
                -->
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Site Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type=hidden name=id required value="<?php echo $id; ?>">
                    <div>
                        <img width="100%" height="90px" src="https://securesignup.net/image.php?id=<?PHP echo $id; ?>">
                    </div>
                    <input class="form-control text-align: center;" type="text" name="number" size="30" placeholder="Enter Captcha">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" value="signup" style="background-color:rgb(9,124,94);">Sign Up</button>
                </div>
                <!-- End signup input fields -->
                <a href="login.php" class="forgot">Already have an account?</a>
                <br>
                <a href="https://cpanel.<?php echo $domain;?>/lostpassword.php" class="forgot">Forgot your password?</a>
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
