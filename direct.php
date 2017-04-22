


<?php

if(strcmp($_POST['choice'],"signin")==0)
  {
     header('Location: login.html');

   } 
   elseif(strcmp($_POST['choice'],"admin")==0)
  {
     
header('Location: login1.html');
   } 
   elseif(strcmp($_POST['choice'],"signup")==0)
  {
     header('Location: naren1.html');

   } 

?>