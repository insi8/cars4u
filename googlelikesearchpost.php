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
        
      $servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
$str = $_GET['st'];
//$connection = mysqli_connect("localhost", "username", "password", "library");
$sql = "SELECT company From list WHERE  company LIKE '%{$str}%'";
$result = mysqli_query($connection, $sql);

$array = array();
while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row['company'];
}
echo json_encode($array);
?>

    </body>
</html>