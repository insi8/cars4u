
Back (accesskey b)    Save (accesskey s)    	File: /public_html/viewdata.php
 	Status: This file has not yet been saved

    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            
        <link rel="stylesheet" href="css/style3.css">
        
    <link rel="stylesheet" href="css/normalize.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <style>
        .button {
            background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 12px 26px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
        
    </style>
        

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style1.css">
            <meta charset="UTF-8">
            <title>
              
            </title>
            <script>
            </script>
        </head>
        <body>
           
            <?php
               echo '<button class="button" onclick="goBack()">Go Back</button>';
            $id=($_GET['q']);;

    $_SESSION['scompany']="";
    $servername = "localhost";
    $username = "u959295034_root";
   $fpassword = "harikrishnan";
    $dbname = "u959295034_oui";
 $value = array("NO","YES");
 
    $conn = new mysqli($servername, $username, $fpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    } $sql = "SELECT * FROM tbl_car WHERE CAR_ID='$id'  ";
    
   

    $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                  
                     $data_value=$row['VARIANT_NAME'];
                      $link =$row['WEB_URL'];
                      echo " <img src='$link' class='img-fluid' alt=''>";
                     
                     echo'<h1>'.$row['COMPANY_NAME'].' '.$row['CAR_NAME'].' '.$row['VARIANT_NAME'].'</h1>';
                     echo '<table id="racetimes">';
                     echo '<tr id="firstrow"><th>Factors</th><th>Car Features</th></tr>';
                     echo '<tr><td>'.'Estimated Price'.'</td><td>'.$row['E_S_PRICE'].'</td></tr>';
                     echo '<tr><td>'.'Body Type'.'</td><td>'.$row['BODY_TYPE'].'</td></tr>';
                     echo '<tr><td>'.'Segment'.'</td><td>'.$row['SEGMENT'].'</td></tr>';
                     echo '<tr><td>'.'Displacement'.'</td><td>'.$row['DISP_CC'].'</td></tr>';
                     echo '<tr><td>'.'Fuel Type'.'</td><td>'.$row['FUEL_TYPE'].'</td></tr>';
                     echo '<tr><td>'.'Transmission'.'</td><td>'.$row['TRANSMISSION'].'</td></tr>';
                     echo '<tr><td>'.'Gear Number'.'</td><td>'.$row['GEAR_NO'].'</td></tr>';
                     echo '<tr><td>'.'Peak Pewer'.'</td><td>'.$row['P_POWER_BHP'].'/'.$row['MAX_RPM_PP'].'</td></tr>';
                     echo '<tr><td>'.'Peak Torque'.'</td><td>'.$row['P_TORQUE_NM'].'/'.$row['MAX_RPM_PT'] .'</td></tr>'; 
                     echo '<tr><td>'.'Mileage City'.'</td><td>'.$row['MILEAGE_CITY'].'</td></tr>'; 
                     echo '<tr><td>'.'Mileage Highway'.'</td><td>'.$row['MILEAGE_HIGHWAY'].'</td></tr>';  
                     echo '<tr><td>'.'Length(mm)'.'</td><td>'.$row['LENGTH_MM'].'</td></tr>'; 
                     echo '<tr><td>'.'Width(mm)'.'</td><td>'.$row['WIDTH_MM'].'</td></tr>'; 
                     echo '<tr><td>'.'Ground Clearence(mm)'.'</td><td>'.$row['GRND_CLR_MM'].'</td></tr>'; 
                     echo '<tr><td>'.'Wheel Base (mm)'.'</td><td>'.$row['WHEEL_BASE_MM'].'</td></tr>'; 
                     echo '<tr><td>'.'Kerb Weight (kg)'.'</td><td>'.$row['KERB_WEIGHT_KGS'].'</td></tr>'; 
                     echo '<tr><td>'.'Boot Space(l)'.'</td><td>'.$row['BOOT_SPACE_L'].'</td></tr>';     
                     echo '<tr><td>'.'Turning Radius(m)'.'</td><td>'.$row['TURNING_RAD_M'].'</td></tr>';   
                     echo '<tr><td>'.'AC'.'</td><td>'.$value[$row['AC']].'</td></tr>';   
                     echo '<tr><td>'.'Climate Control'.'</td><td>'.$value[$row['CLIMATE_CTRL']].'</td></tr>';   
                     echo '<tr><td>'.'Central Lock'.'</td><td>'.$value[$row['CENTRAL_LOCK']].'</td></tr>';   
                     echo '<tr><td>'.'CD Player'.'</td><td>'.$value[$row['CD_PLAYER']].'</td></tr>';   
                     echo '<tr><td>'.'Power Steering'.'</td><td>'.$value[$row['POWER_STEERING']].'</td></tr>';   
                     echo '<tr><td>'.'Power Windows'.'</td><td>'.$value[$row['POWER_WINDOWS']].'</td></tr>';   
                     echo '<tr><td>'.'Steering Adjustment (Rake)'.'</td><td>'.$value[$row['STEERING_ADJ_RAKE']].'</td></tr>';   
                     echo '<tr><td>'.'Steering Adjustment (Reach)'.'</td><td>'.$value[$row['STEERING_ADJ_REACH']].'</td></tr>';   
                     echo '<tr><td>'.'Electrically Adjustable Driver Seat'.'</td><td>'.$value[$row['E_ADJ_D_SEAT']].'</td></tr>';  
                     echo '<tr><td>'.'Steering Mounted Controls'.'</td><td>'.$value[$row['STEERING_M_C']].'</td></tr>';  
                     echo '<tr><td>'.'Rear AC vent'.'</td><td>'.$value[$row['REAR_AC_VENT']].'</td></tr>';  
                     echo '<tr><td>'.'Remote Controlled Boot'.'</td><td>'.$value[$row['REMOTE_C_B']].'</td></tr>';  
                     echo '<tr><td>'.'Rear wiper'.'</td><td>'.$value[$row['REAR_WIPER']].'</td></tr>';   
                     echo '<tr><td>'.'Leather seats'.'</td><td>'.$value[$row['LEATHER_SEATS']].'</td></tr>';  
                     echo '<tr><td>'.'Electrically Adjustable Mirrors'.'</td><td>'.$value[$row['E_ADJ_MIRRORS']].'</td></tr>';  
                     echo '<tr><td>'.'Anti-Lock Braking System(ABS)'.'</td><td>'.$value[$row['ABS']].'</td></tr>';   
                     echo '<tr><td>'.'Airbag'.'</td><td>'.$value[$row['AIR_BAG']].'</td></tr>'; 
                     echo '<tr><td>'.'Parking Sensors'.'</td><td>'.$value[$row['PARKING_SENSORS']].'</td></tr>'; 
                     echo '<tr><td>'.'Traction control'.'</td><td>'.$value[$row['TRACTION_CONTROL']].'</td></tr>'; 
                     
                   
                     echo '<tr><td>'.'Fuel Capacity (L)'.'</td><td>'.$row['FUEL_CAP_L'].'</td></tr>';  
                     echo '<tr><td>'.'Seating Capacity'.'</td><td>'.$row['SEATING_CAP'].'</td></tr>';  
                     echo '<tr><td>'.'Tyre Specs Front'.'</td><td>'.$row['F_TYRE_WIDTH_MM'].'/'.$row['F_TYRE_H_R'].' '.$row['F_RADIAL_PLY'].$row['F_WHEEL_RIM_DIA_IN'] .'</td></tr>';  
                      echo '<tr><td>'.'Tyre Specs Rear'.'</td><td>'.$row['B_TYRE_WIDTH_MM'].'/'.$row['B_TYRE_H_R'].' '.$row['B_RADIAL_PLY'].$row['B_WHEEL_RIM_DIA_IN'] .'</td></tr>';  
                     
                                         
                     }






           }
//          $r= $_SERVER['REQUEST_URI'];
//           $r= str_replace("/", "", $r);
//
//            $datain = $r;
//
//            $counter = "counter";
//
//    //setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
//
//
//    if(!isset($_COOKIE[$counter])) {
//         echo "Cookie named '" . $counter . "' is not set!";
//         $counter_value=0;
//
//
//
//
//    } else {
//         $counter_value= $_COOKIE[$counter];
//    }
//         $datalink="datalink".$counter_value;
//         $dataa="data".$counter_value;
//         $datalink_value=$datain;
//
//         $i=4;
//
//          if($counter_value==4)
//          {
//              $alarm="full";
//              $data="fixed";
//               setcookie($alarm, $data, time() + (86400 * 100), "/");  
//
//          }
//
//
//           setcookie($datalink, $datalink_value, time() + (86400 * 100), "/");
//             setcookie($dataa, $data_value, time() + (86400 * 100), "/");
//            $counter_value=($counter_value+1)%5;
//             echo $counter_value;
//            setcookie($counter, $counter_value, time() + (86400 * 100), "/");  
//
//            // put your code here
            ?> 
          

   

    <script>c
    function goBack() {
          window.history.go(-1);
    }



        </body>
    </html>

