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
    </head>
    <body>
        <?php
       $company= $_SESSION["scompany"];
   $q =($_GET['r']);

 $servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$con = new mysqli($servername, $username, $fpassword, $dbname);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM list WHERE company = '$company' AND model='$q'";
  echo "hai";      ?>
    </body>
</html>
