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
        
// Fetching Values From the post method
$username = $_POST['username'];
$password = $_POST['password'];
$rr="asdf";
$sql = "INSERT INTO list (compamy,model,version) VALUES ('$username','$password','$rr')" ;
$result = $conn->query($sql);

        // put your code here
        ?>
        <?php echo $username ?>
    </body>
</html>
