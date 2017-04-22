


<?php

if(strcmp($_POST['choice'],"tabout")==0)
  {
     header('Location: see1.php');

   } 
   elseif(strcmp($_POST['choice'],"tavail")==0)
  {
     
header('Location: see2.php');
   } 
   elseif(strcmp($_POST['choice'],"tflight")==0)
  {
     header('Location: see3.php');

   } 
   
    elseif(strcmp($_POST['choice'],"tfix")==0)
  {
     header('Location: see4.php');

   } 

    elseif(strcmp($_POST['choice'],"tregistration")==0)
  {
     header('Location: see5.php');

   } 


?>