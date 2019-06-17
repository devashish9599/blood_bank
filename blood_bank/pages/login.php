<!DOCTYPE html>
<?php session_start();
ob_start();
if(@$_SESSION['LoggedIn']==1)
{
	header('Location: user.php');
}
?>
<html>

<head>
    <title>Login</title>
	<link href="../images/logo1.png" rel="icon" sizes="32x32">
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_regular-webfont.woff);
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_bold-webfonts.woff);
            font-weight: bold;
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_italic-webfonts.woff);
            font-weight: italic;
        }
        
        @font-face {
            font-family: myFont;
            src: url(../fonts/product_sans_bold_italic-webfonts.woff);
            font-weight: bold italic;
        }
        
        div {
            font-family: myFont;
        }
    </style>
</head>

<body bgcolor="#e0e0e0">
<header>
                <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>                 
                <script language="javascript" type="text/javascript">
                          
                        
                      $( document ).ready(function(){
                      $(".button-collapse").sideNav();//mobile screen menu init
                      $('.sidenav').sidenav();
                        
                      });
                </script>
            <nav class="white">
                <div class="nav-wrapper " >
                        <a href="index.html" class="brand-logo"><img src="../images/logo.png" height="60px" width="160px"></img></a>
                        <a href="#" data-target="side-menu" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="user.php"><i class="material-icons  black-text">account_circle</i></a></li>
                            <li><a href="register.php" class=" black-text">Register</a></li>
                            <li><a href="donors.php" class=" black-text">Find Donors</a></li>
                        </ul>
                    
                        
                </div>
            </nav>
            <ul class="sidenav" id="side-menu">
                    <li><a class=" black-text" href="login.php"><i class="material-icons">account_circle</i></a></li>
                    <li><a class=" black-text" href="register.php">Sign in</a></li>
                    <li><a class=" black-text" href="donors.php">Find Donors</a></li>
            </ul>
    </header>
    <main>
        <div class="container">

            <div class="row">
                <div>
                    <div class="card white z-depth-3" style="text-align: center">
                        <div class="card-content">
                            <i class="large material-icons" style="color: gray;font-size: 150px">account_circle</i>
                            <br>
                            <h3>Login</h3>
                            <br>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <form action='../scripts/login.php' class="col s12" method='post'>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input class="validate" id="email-id" name="email_id" type="text">
                                                <label for="email-id">E-mail</label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input class="validate" id="password" name="password" type="password">
                                                    <label for="password">Password</label>
                                                </div>
                                                <br>
                                                <button class="btn waves-effect waves-light" name="submit" type="submit">Submit <i class="material-icons right">send</i></button> <a class="waves-effect waves-light btn" href="register.php"><i class="material-icons right">account_circle</i>Register</a>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </main>

    <footer class="page-footer grey darken-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        
                        <h5 class="white-text">Project by:</h5>
                        <ul>
                            <li><a class="white-text" href="https://github.com/ayush12451">Ayush</a></li>                        
                            <li><a class="white-text" href="https://github.com/achyutshantanu">Shantanu</a></li>
                            <li><a class="white-text" href="https://github.com/devashsih">Devashish</a></li>
                            <li><a class="white-text" href="https://github.com/Areeb0206">Areeb</a></li>
                        </ul>
                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                    <li><a class="white-text" href='login.php'>Login</a></li>
                        <li><a class="white-text" href="register.php">Register</a></li>
                        <li><a class="white-text" href="donors.php">Donors</a></li>
                        <li><a class="white-text" href="index.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s6">
                        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                    </div>
                    <div class="col s6">
                        Follow this project on <a class="orange-text text-lighten-3" href="https://github.com/ayush12451/blood_bank">Github</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</body>

</html>