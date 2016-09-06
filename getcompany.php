<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    
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

$q = $q =($_GET['q']);

 $servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$con = new mysqli($servername, $username, $fpassword, $dbname);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$temp="sadf";
mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM list WHERE id = '$q'";
//$result = mysqli_query($con,$sql);
//while($row = mysqli_fetch_array($result)) {
//    $q=$row['company'];
//}
$sql=$_SESSION["uquery"];
$tempal="dsaf";
$rr="COMPANY_NAME";
if(!isset($_SESSION["COMPANY_NAME"]))
    {
//    $temp="company=";
//    
//    $temp=$temp."'$tempal'";
//    echo $temp;
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
if($q!="Select")
{
 $_SESSION["COMPANY_NAME"]=$q;
 
 
 $sql=$sql." "."AND COMPANY_NAME='$q'";
 echo $sql;
 $_SESSION["uquery"]=$sql;
}
//$sql="SELECT * FROM list WHERE company = '$q'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>

<th>COMPANY_NAME</th>
<th>CAR_NAME</th>
<th>VARIANT_NAME</th>
<th>E_S_PRICE</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
   
    echo "<td>" . $row['COMPANY_NAME'] . "</td>";
    echo "<td>" . $row['CAR_NAME'] . "</td>";
    echo "<td>" . $row['VARIANT_NAME'] . "</td>";
      echo "<td>" . $row['E_S_PRICE'] . "</td>";
  
    echo "</tr>";
}
echo "</table>";
echo "||";
$sql="SELECT DISTINCT CAR_NAME FROM tbl_car WHERE COMPANY_NAME='$q'";
$result = mysqli_query($con,$sql);
echo '<select name="usero" onchange="showModel(this.value,0)"><option>Select</option>';
while($row = mysqli_fetch_array($result)) {
    echo "<option>".$row['CAR_NAME']."</option>";
    
    
    
}echo "</select></form>";

mysqli_close($con);
?>
</body>
</html>
