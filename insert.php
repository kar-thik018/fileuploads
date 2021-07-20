
<?php
   $username=$_POST['username'];
   $useremail=$_POST['useremail'];
   $file=$_FILES['file']['name'];
   $filename=$_FILES['file']['name'];
   $filetype=$_FILES['file']['type'];
   $filesize=$_FILES['file']['size'];
   $tempfile=$_FILES['file']['tmp_name'];
   

  
   
 include('dbconnection.php');
   $query="INSERT INTO `upload`(`username`,`useremail`,`file`,`extension`) VALUES('$username','$useremail','$file','$filetype')";
  $sql=mysqli_query($connect,$query);
  if($sql){
     header("location:select.php");
  }else{
    echo "data failed";
  }

  ?>