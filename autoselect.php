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
$sql = "SELECT DISTINCT company FROM list ";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {?>   
      
<select id="myfield" name='myfield'onchange="myFunction()" >
  <option selected>Select</option>
  <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
       
        
?>  
   <option> <?php echo$row["company"]?></option>
<?php }} ?>
  
</select>
        
<p id="demo"></p>
<script>
function myFunction() {
    var x = document.getElementById("myfield").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

   
        
       
    </body>
</html>
