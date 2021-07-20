
<html>
    <head>
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

         <!-- jQuery library -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
         <!-- Popper JS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
         <!-- Latest compiled JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <title>uploaded files...!!</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center text-white bg-dark">uploaded ppt files</h1>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                   
                    <th>username</th>
                    <th>user email</th>
                    <th>files</th>
                </thead>
                <tbody>
                    <?php
                     include "dbconnection.php";
                     $query="SELECT * FROM `upload`WHERE `extension` = 'application/vnd.openxmlformats-officedocument.presentationml.presentation'";
                     $sql=mysqli_query($connect,$query);
                     $i=0;
                 while($row=mysqli_fetch_array($sql)){
                       echo "<tr>";
                      
                       echo "<td>" . $row['username'] ."</td>";
                       echo "<td>" . $row['useremail'] ."</td>";
                       echo "<td>" . $row['file'] ."</td>";
                       
                       echo "</tr>";
                       $i++;
                     }
                     echo "</table>";
                    ?>
                </tbody>

            </table>
        </div>
   </body>
</html>