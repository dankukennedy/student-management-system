<?php
session_start();
define('BD_HOST','localhost');
define('BD_USER','root');
define('BD_PASSWORD','');
define('BD_DATABASE','defint');



function redirect($message,$page)
{
 $redirectTo=SITE_URL.$page; 
 $_SESSION['message']="$message";
  header("Location: $redirectTo");
  exit(0);
 } 

function validateInput($dbcon,$input)
{
   return  mysqli_real_escape_string($dbcon,$input);
}


?>