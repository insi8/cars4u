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

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM list WHERE id = '$q'";
//$result = mysqli_query($con,$sql);
//while($row = mysqli_fetch_array($result)) {
//    $q=$row['company'];
//}
 $_SESSION["scompany"]=$q;
$sql="SELECT * FROM list WHERE company = '$q'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['company'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['version'] . "</td>";
  
    echo "</tr>";
}
echo "</table>";
echo "||";
$sql="SELECT model FROM list WHERE company='$q'";
$result = mysqli_query($con,$sql);
echo '<select name="usero" onchange="showModel(this.value)"><option>Select</option>';
while($row = mysqli_fetch_array($result)) {
    echo "<option>".$row['model']."</option>";
    
    
    
}echo "</select></form>";

mysqli_close($con);
?>
</body>
</html>
