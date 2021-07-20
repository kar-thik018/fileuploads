<?php
  $servername="localhost";
  $user="root";
  $password="";
  $dbname="fileuploads";
  
  $connect= mysqli_connect($servername,$user,$password,$dbname);

  if($connect){
   echo " ";}
   else{
     echo "fail to connect";
   }


