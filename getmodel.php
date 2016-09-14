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
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style1.css">
         <link rel="stylesheet" href="css/style7.css">
        </head>
        <body>
            <?php
$id=0;
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
     $valrang=array(0,0,0,0,50000,5,2,5,5,1);
         
     $sel_list=array("CAR_NAME","FUEL_TYPE","asdfgad","asdfa","E_S_PRICE","COMFORT_PT","MILEAGE_CITY","SECURITY_PT","EOD_PT","SEATING_CAP");
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
     if($count>3)
     {

         $sql=$_SESSION["uquery"];
         $rr=$sel_list[$count];
    if(!isset($_SESSION[$rr]))
        {
   
        } 
     else {
         $tempal=$_SESSION[$rr];
       $va=$tempal-$valrang[$count];$vb=$tempal+$valrang[$count];  


       $temp="AND"." ".$rr." "."BETWEEN"."'$va'"." "."AND"." "."'$vb'";

       echo $temp;
       echo "<br>";
       $sql= str_replace($temp, "", $sql);
        $_SESSION["uquery"]=$sql;

    }
    if($q!="Select")
    {
     $_SESSION[$rr]=$q;
      $va=$q-$valrang[$count];$vb=$q+$valrang[$count];

     $sql=$sql." "."AND"." ".$rr." "."BETWEEN"."'$va'"." "."AND"." "."'$vb'";
     echo $sql;
     $_SESSION["uquery"]=$sql;
    }
     }
$i=1;
$try=$sql;
$sql=$sql." "."LIMIT 9";
  $result = mysqli_query($con,$sql);
 
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
   $link =$row['CAR_IMG_URL'];
  echo " <img src='$link' class='img-fluid' alt=''>";
  echo '<a href="#!">';
  echo '<div class="mask"></div>';   
  echo '</a>';    
  echo '  </div>'; 
  echo '<div class="card-block">';
  echo ' <h5 class="card-title">'.$row['COMPANY_NAME'].' '. $row['CAR_NAME'].' '.'</h5>';
  echo '<p class="card-text"><h6>'.$row['VARIANT_NAME'].' '.'<br>'. '₹'. $row['E_S_PRICE'].'<h6></p>'; 
  echo '<br>';
  echo '<div class="read-more">';
  
    echo "<button  onclick=viewTable('$id') class='btn btn-primary'>Read more</button>";
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
  $count=$count+1;
  
       echo '</div>';
  
  
 $_SESSION["more"]=$id;
  $result = mysqli_query($con,$try);
  $rowcount=mysqli_num_rows($result);
  if($rowcount>9)
  {
  
  
 $m=0;
  echo "<button id='rem' onclick=viewMore('$m') class='push_button red'>View more</button>";}
    mysqli_close($con);

//    echo $count;      ?>
            
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
        </body>
    </html>
