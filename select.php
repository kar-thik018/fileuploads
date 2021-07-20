<html>
   <head>
       <title>please select the file type</title> 
  </head>
  <style>
      * {
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

}
body
{
    width: 100%;
    min-height: 100vh;
    display: flex;
    background-color: #aaaa;
 /* background-image:url("bg2.jpg");*/
    align-items:center;
    justify-content:center;
    
}
    input[type="submit"]
{   display:inline;
     margin:100px ;
    border:3px solid #3498db;
    padding:10px 20px;
    font-size:25px;
    cursor:pointer;
    border-radius:20px;
    height:100px;
    box-shadow: 5px 10px 15px rgba(0,0,0,.3);
    transition: transform .4s;
    background-color: #fff;
    margin-right:150px;
    width:25%;
    height:25%;
    align-items:center;
  
}
input[type="submit"]:hover
{
    transform: scale(1.1);
    background-color: ;
    letter-spacing: 2px;

}




  </style>
     <body>
 
  <form method="POST">
    <input type="submit" name="pdf" value="PDF FILES [.PDF]" placeholder="pdffiles">
    <input type="submit" name="doc" value=" DOCUMENT FILES[.DOC]">
    <input type="submit" name="ppt" value=" PPT FILES[.PPT]">
     <input type="submit" name="allfiles" value="ALL FILES">
  </form>

  <?php
 include('dbconnection.php');
  if(isset($_POST['pdf'])){
  header("location:pdf.php");

   }
   if(isset($_POST['doc'])){
       
   header("location:doc.php");
    }  
if(isset($_POST['ppt'])){
    header("location:ppt.php");
 
 }

 if(isset($_POST['allfiles'])){
    header("location:all.php");
 
 }


  ?>
  </body>

</html>