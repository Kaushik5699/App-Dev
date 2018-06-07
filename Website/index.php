<?php include('includes\server.php') ?>
<html>
    <head>
        <title>
            SignIn
        </title>
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body background = "C:\apache24\htdocs\Website\back.jpg">
            <div id="head">
                 <h1 class="head">
                    <center>
                    Not Thought of a heading yet ! :)
                    </center>
                 </h1>
            </div>
            <div id="login-box">
                <div class="left-box">
                    <h1>Sign Up</h1>
                        <form class="signup-form" action="index.php" method="POST">
                            <input type="text" name="username" placeholder="Username"/>
                                <input type="text" name="email" placeholder="Email"/>
                                <input type="password" name="password" placeholder="Password"/>
                                <input type="password" name="password2" placeholder="Retype Password"/>
                                <input type="submit" name="signup-button" value="Sign Up"/><br>
                                Already a member?<a href="login.php">Login</a>
                        </form>
                </div>
                <div class="right-box">
                  <span class="signinwith">Sign In with social network</span>
                        <button class="social facebook"> <a href="#" class="fa fa-facebook"></a>  Log in with Facebook</button>
                        <button class="social twitter"><a href="#" class="fa fa-twitter"></a>  Log in with twitter</button>
                        <button class="social google" onclick="signIn()"><a href="#" class="fa fa-google"></a>  Log in with google</button>
                </div>
                <div class="or">
                OR
                </div>
                </div>
       </body>
</html>