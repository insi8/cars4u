<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="css/normalize.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <?php
        
       $servername = "localhost";
    $username = "root";
    $fpassword = "";
    $dbname = "oui";


    $con = new mysqli($servername, $username, $fpassword, $dbname);

    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
      mysqli_select_db($con,"ajax_demo");
       $sql= $_SESSION["uquery"];
    $ide= $_SESSION["more"];
    $sqli= "WHERE CAR_ID >".$ide;
   $temp="WHERE CAR_ID IS NOT NULL";
     $sql= str_replace($temp,$sqli, $sql);
    
    echo $sql;
        // put your code here
    $result = mysqli_query($con,$sql);
    $count=0;
    while($row = mysqli_fetch_array($result)) 
   {
         $ide=$row['CAR_ID'];

           if($count==0)
           {
   echo '<div class="row">';
           }
 echo '<div class="col-md-4">';
  echo '<div class="card">';
  echo ' <div class="view overlay hm-white-slight">';
   $link =$row['CAR_IMG_URL'];
  echo " <img src='$link' class='img-fluid' alt=''>";
  echo '<a href="#!">';
  echo '<div class="mask"></div>';   
  echo '</a>';    
  echo '  </div>'; 
  echo '<div class="card-block">';
  echo ' <h5 class="card-title">'.$row['COMPANY_NAME'].' '. $row['CAR_NAME'].' '.'</h5>';
  echo '<p class="card-text"><h6>'.$row['VARIANT_NAME'].' '.'<br>'. '₹'. $row['E_S_PRICE'].'<h6></p>'; 
  echo '<div class="read-more">';
  
    echo "<button onclick=viewTable('$ide') class='btn btn-primary'>Read more</button>";
  echo ' </div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
 
 
  if($count=0)
  {
  echo '</div>';
  $count=3;
  }
  $count=$count-1;
  }
  
 
   
    mysqli_close($con);
        ?><script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
    </body>
</html>
