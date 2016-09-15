    <!DOCTYPE html>
    <?php
    session_start();
    ?>
    <html>
    <head>

  
    
    

    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style1.css">
          <link rel="stylesheet" href="css/style7.css">
    <body>

    <?php

    $q = $q =($_GET['q']);
 $servername = "localhost";
  $username = "u959295034_root";
 $fpassword = "harikrishnan";
 $dbname = "u959295034_oui";


    $con = new mysqli($servername, $username, $fpassword, $dbname);

    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    $temp="sadf";
    mysqli_select_db($con,"ajax_demo");
   
    $sql=$_SESSION["uquery"];
    $tempal="dsaf";
    $rr="COMPANY_NAME";
    if(!isset($_SESSION["COMPANY_NAME"]))
        {
   
    }
     else {
         $tempal=$_SESSION[$rr];

       $temp="AND COMPANY_NAME=";
       if(!isset($_SESSION["CAR_NAME"]))
         {

         }
     else {


         $tempalb=$_SESSION["CAR_NAME"];
       $temp2="AND CAR_NAME=";
       $temp2=$temp2."'$tempalb'";
        $sql= str_replace($temp2, "", $sql);
     }
       $temp=$temp."'$tempal'";
       $sql= str_replace($temp, "", $sql);


     }
    if($q!="All")
    {
     $_SESSION["COMPANY_NAME"]=$q;


     $sql=$sql." "."AND COMPANY_NAME='$q'";
    // echo $sql;
     $_SESSION["uquery"]=$sql;
    }
    else{
        $tempal=$_SESSION[$rr];
         $temp="AND COMPANY_NAME=";
         $temp=$temp."'$tempal'";
       $sql= str_replace($temp, "", $sql);
        if(!isset($_SESSION["CAR_NAME"]))
         {

         }
     else {


         $tempalb=$_SESSION["CAR_NAME"];
       $temp2="AND CAR_NAME=";
       $temp2=$temp2."'$tempalb'";
        $sql= str_replace($temp2, "", $sql);
     }
      $_SESSION["uquery"]=$sql;
       
    }
    $try=$sql;
   $sql=$sql." "."LIMIT 9";
    //$sql="SELECT * FROM list WHERE company = '$q'";
    $result = mysqli_query($con,$sql);
    $count=0;
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
  echo '<p class="card-text"><h6>'.$row['VARIANT_NAME'].' '.'<br>'. 'â‚¹'. $row['E_S_PRICE'].'<h6></p>'; 
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
  
  
 $_SESSION["more"]=$id;
  $result = mysqli_query($con,$try);
  $rowcount=mysqli_num_rows($result);
 if($rowcount>9)
  {
  
  
 $m=0;
  echo "<button id='rem' onclick=viewMore('$m') class='push_button red'>View more</button>";}
   
    echo "||";
    $sql="SELECT DISTINCT CAR_NAME FROM tbl_car WHERE COMPANY_NAME='$q'";
    $result = mysqli_query($con,$sql);
    echo '<select name="usero" onchange="showModel(this.value,0)"><option>All</option>';
    while($row = mysqli_fetch_array($result)) {
        echo "<option>".$row['CAR_NAME']."</option>";



    }echo "</select></form>";


    mysqli_close($con);
    ?>
    </body>
    </html>
