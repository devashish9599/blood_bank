<?php 
   ob_start();
   function populate($email)
   {
    require 'db_info.php';
    $sql= "SELECT * FROM user
    WHERE email= '".$email."'";
    $row = mysqli_fetch_array(mysqli_query($con, $sql));
    $name = $row['first_name']." ".$row['last_name'];
    $age= $row['age'];	
    $html='<div class="col s12 m4">
           <div class="card" style="text-align: center;">
             <div class="card-content">
                <i class="material-icons large" style="font-size: 140px">account_circle</i>   
                <span class="card-title">'.$name.'</span>
                <p>Age:'.$age.'</p>
             </div>
             <div class="card-action">
                   <form action="../scripts/accept.php" method="post">
                     <input type="hidden" id="email" name="email" value="'.$email.'">
                     <button class="btn waves-effect waves-light orange accent-3" name="submit" type="submit">Accept</button>
                   </form>             
             </div>
            </div>
            </div>';
     echo $html;
   
   }
   
   
?>