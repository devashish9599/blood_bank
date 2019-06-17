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
    <title>Register</title>
	<link href="../images/logo1.png" rel="icon" sizes="32x32">    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
 

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
    <script  type="text/javascript">
        $(document).ready(function() {
        $('select').formSelect();
        });
        $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
    </script>
    
        
    
    
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

                    <div class="card-content">
                        <div class="card-panel white z-depth-3" style="text-align: center">

                            <i class="large material-icons" style="color: gray;font-size: 150px">account_circle</i>
                            <br>
                            <h3>Register</h3>
                            <br>
                            <br>
                            <div class="row">
                                <form action="../scripts/register.php" method="post" class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" name="first_name"  type="text" class="validate">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="last_name" name="last_name" type="text" class="validate">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" name="email" type="email" class="validate">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="password" name="password" type="password" class="validate">
                                            <label for="password">Password </label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="phone_no" name="phone_no" type="text" class="validate">
                                            <label for="phone_no">Phone Number</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="address" name="address" type="text" data-length="200" class="validate">
                                            <label for="address">Address </label>
                                        </div>
                                        <div class="input-field col s6">
                                        <input id="state" name="state" type="text" style="text-transform: uppercase" class="validate">
                                            <label for="state">State </label>                                           
                                        </div>
                                        <div class="input-field col s6">
                                        <input id="city" name="city" type="text" style="text-transform: uppercase" class="validate">
                                            <label for="city">City </label>
                                        </div>
                                        <div class="input-field col s6">
                                                
                                            <select class="browser-default" name="blood_grp">
                                              <option value="" disabled selected>Blood Group</option>
                                              <option value="A+">A+</option>
                                              <option value="A-">A-</option>
                                              <option value="B+">B+</option>
                                              <option value="B-">B-</option>
                                              <option value="O+">O+</option>
                                              <option value="O-">O-</option>
                                              <option value="AB+">AB+</option>
                                              <option value="AB-">AB-</option>
                                            </select>
                                            
                                            
                                          </div>

                                        <div class="input-field col s6">
                                            <input id="age" name="age" type="number" class="validate">
                                            <label for="age">Age </label>
                                            <span class="helper-text">You must be over 18 to donate blood</span>
                                        </div>

                                        <br><br>
                                        <div class="row">
                                        <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                        </div>
                                </form>
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
 
