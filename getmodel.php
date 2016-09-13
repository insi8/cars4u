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

     $q =($_GET['r']);

     $count =($_GET['count']);
     $sel_list=array("CAR_NAME","FUEL_TYPE","asdfgad","asdfa","asdfa","COMFORT_PT","asdfasdf","asdfadf");
     if($count<2)
     {
    $sql=$_SESSION["uquery"];
    $tempal="dsaf";
    $rr=$sel_list[$count];
    if(!isset($_SESSION[$rr]))
        {
    
        }
     else {
         $tempal=$_SESSION[$rr];
       $temp="AND"." ".$sel_list[$count]."=";   

       $temp=$temp."'$tempal'";
       echo $temp;
       echo "<br>";
       $sql= str_replace($temp, "", $sql);

    }
    echo $q."<br>";
    if(($q!="Select")&&($q!="All"))
    {
     $_SESSION[$rr]=$q;

     $sql=$sql." "."AND"." ".$rr."="."'$q'";
    


    }
    echo $sql;
    $_SESSION["uquery"]=$sql;
     }
     if($count==5)
     {

         $sql=$_SESSION["uquery"];
         $rr=$sel_list[$count];
    if(!isset($_SESSION[$rr]))
        {
   
        } 
     else {
         $tempal=$_SESSION[$rr];
       $va=$tempal-5;$vb=$tempal+5;  


       $temp="AND"." ".$rr." "."BETWEEN"."'$va'"." "."AND"." "."'$vb'";

       echo $temp;
       echo "<br>";
       $sql= str_replace($temp, "", $sql);
        $_SESSION["uquery"]=$sql;

    }
    if($q!="Select")
    {
     $_SESSION[$rr]=$q;
      $va=$q-5;$vb=$q+5;

     $sql=$sql." "."AND"." ".$rr." "."BETWEEN"."'$va'"." "."AND"." "."'$vb'";
     echo $sql;
     $_SESSION["uquery"]=$sql;
    }
     }
$i=1;
$sql=$sql." "."LIMIT 9";
  $result = mysqli_query($con,$sql);
//   $rowcount=mysqli_num_rows($result);
//   if($rowcount%3==0)
//   {
//       $row=$rowcount/3;
//   }
// else {
//$row=($rowcount/3)+1;      
//}
  $count=0;
   while($row = mysqli_fetch_array($result)) 
   {
         $id=$row['CAR_ID'];

           if($count==0)
           {
   echo '<div class="row">';
           }
 echo '<div class="col-md-4">';
  echo '<div class="card">';
  echo ' <div class="view overlay hm-white-slight">';
  echo '   <img src="https://imgct2.aeplcdn.com/img/180x135/car-data/big/nissan-sunny-default-transparent.png-version2016090815.png" class="img-fluid" alt="">';
  echo '<a href="#!">';
  echo '<div class="mask"></div>';   
  echo '</a>';    
  echo '  </div>'; 
  echo '<div class="card-block">';
  echo ' <h5 class="card-title">'.$row['COMPANY_NAME'].' '. $row['CAR_NAME'].' '.'</h5>';
  echo '<p class="card-text"><h6>'.$row['VARIANT_NAME'].' '.'<br>'. '₹'. $row['E_S_PRICE'].'<h6></p>'; 
  echo '<div class="read-more">';
  
    echo "<button onclick=viewTable('$id') class='btn btn-primary'>Read more</button>";
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
  
 $_SESSION["more"]=$id;
    echo "<button onclick=viewMore('5') class='btn btn-primary'>More</button>";
    mysqli_close($con);

//    echo $count;      ?>
            
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
        </body>
    </html>
