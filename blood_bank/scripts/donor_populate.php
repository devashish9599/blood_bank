<?php
 require 'db_info.php';
 ob_start();
 function populate($name,$blood_grp,$age,$email)
 {  
    
    $colours=array("#51baf9","hsl(315, 93%, 65%)","rgb(255, 187, 0)","rgb(107, 250, 190)","rgb(250, 107, 107)","rgb(205, 107, 250)","rgb(91, 141, 250)","rgb(91, 94, 250)");
    $color_temp=array_rand($colours,6);
    $color=$colours[$color_temp[0]];
    $html='<div class="col s12 m4">
            <div class="card  z-depth-2" style="text-align:center">
                <div class="card-content">
                    <i class="material-icons large" style="color:'.$color.';font-size: 140px">account_circle</i>
                    <span class="card-title">'.$name.'</span>
                    <p>Blood Group: '.$blood_grp.'</p>
                    <p >Age: '.$age.'</p>
                </div>
                <div class="card-action">';
            
    $html2='<form action="../scripts/contact_user.php" method="post">
                    <input type="hidden" id="email" name="email" value="'.$email.'">
                    <button class="btn waves-effect waves-light orange accent-3" name="submit" type="submit">Contact</button>
                </form>';
               
    $html3='<a class="btn disabled">Login to contact</a>';
                            
    $html4='</div>
        </div>
    </div>';
    if(!empty($_SESSION['LoggedIn'])){$choice=$html2; }
    else
    {$choice=$html3; } 
    echo $html.$choice.$html4;
    
 }

?>