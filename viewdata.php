<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=($_GET['q']);;
echo $id;
  $_SESSION['scompany']="";
$servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} $sql = "SELECT * FROM tbl_car WHERE CAR_ID='$id'  ";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
                
                echo $row['VARIANT_NAME'];
                 $data_value=$row['VARIANT_NAME'];
                
                
            }
            
            
            
            
            
            
       }
      $r= $_SERVER['REQUEST_URI'];
       $r= str_replace("/", "", $r);
      echo "<br>";
      echo $r;
        $datain = $r;
        
        $counter = "counter";

//setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day


if(!isset($_COOKIE[$counter])) {
     echo "Cookie named '" . $counter . "' is not set!";
     $counter_value=0;
     
    
     
     
} else {
     $counter_value= $_COOKIE[$counter];
}
     $datalink="datalink".$counter_value;
     $dataa="data".$counter_value;
     $datalink_value=$datain;
    
     $i=4;
   
      if($counter_value==4)
      {
          $alarm="full";
          $data="fixed";
           setcookie($alarm, $data, time() + (86400 * 100), "/");  
          
      }
      
      
       setcookie($datalink, $datalink_value, time() + (86400 * 100), "/");
         setcookie($dataa, $data_value, time() + (86400 * 100), "/");
        $counter_value=($counter_value+1)%5;
         echo $counter_value;
        setcookie($counter, $counter_value, time() + (86400 * 100), "/");  
      
        // put your code here
        ?> 
        <button onclick="goBack()">Go Back</button>

<p>Notice that clicking on the Back button here will not result in any action, because there is no previous URL in the history list.</p>

<script>c
function goBack() {
      window.history.go(-1);
}
        
        
      
    </body>
</html>
