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
        
        
        
        <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
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
    //  $company= $_SESSION["COMPANY_NAME"];

 


$sql=$_SESSION["uquery"];
$tempal="dsaf";
$rr=$sel_list[$count];
if(!isset($_SESSION[$rr]))
    {
//    $temp="company=";
//    
//    $temp=$temp."'$tempal'";
//    echo $temp;
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
 //$sql=$sql." "."AND CAR_NAME='$q'";
 
 
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
//    $temp="company=";
//    
//    $temp=$temp."'$tempal'";
//    echo $temp;
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


$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<
<th>company</th>
<th>CAR_NAME</th>
<th>VARIANT_NAME</th>
<th>E_S_PRICE</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
   $id=$row['CAR_ID'];
    echo "<td>" . $row['COMPANY_NAME'] . "</td>";
    echo "<td>" . $row['CAR_NAME'] . "</td>";
    echo "<td>";
    //echo'<a href="viewdata.php?id=' . $id . '">';
   echo "<button onclick=viewTable('$id')>";
   
    echo $row['VARIANT_NAME'] ;
   echo "</button>";
    echo "</td>";
      echo "<td>" . $row['E_S_PRICE'] . "</td>";
  
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
//$sql="SELECT * FROM list WHERE company = '$company' AND model='$q'";
  echo $count;      ?>
    </body>
</html>
