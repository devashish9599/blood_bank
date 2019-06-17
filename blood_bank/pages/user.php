<!DOCTYPE html>
<?php session_start();
   ob_start();
   if(empty($_SESSION['LoggedIn']))
   {
       header('Location: login.php');
   }
   ?>
<html>
   <head>
      <title>My Account</title>
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
         src: url(../fonts/product_sans_bold-webfont.woff);
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
                  <div class="card white z-depth-3" style="text-align:center">
                     <br><br>
                     <i class="large material-icons" style="color: gray;font-size: 150px">account_circle</i>
                     <br>
                     <h3><?php echo $_SESSION['name']; ?></h3>
                     <br><br>
                     <form action="user.php" method="post">
                     <button class="btn waves-effect waves-light" name="logout" type="submit">Log-Out</button> 
                     <?php if(isset($_POST['logout'])){session_destroy(); header('Location: index.html'); } ?>
                     <br><br>
                     
                     <h2 class='orange-text text-accent-3'>Requests</h2>
                     
                     <br><br>
                     <div class='row'>
                     <?php
                        require '../scripts/db_info.php';
                        require '../scripts/populate.php';
                        $temp = mysqli_fetch_array(mysqli_query($con, 'SELECT count(*) from request'));
                        $count=$temp[0];
                        while ($count != 0) {
                            $sql = "SELECT * FROM request WHERE id = '".$count."'";
                            $row = mysqli_fetch_array(mysqli_query($con, $sql));
                            if($row['to_id']==$_SESSION['email'] and $row['accepted']!=1 )
                            {
                                populate($row['from_id']);                                                             
                            }
                            $count-=1;
                           }
                        ?>
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