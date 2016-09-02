<html>
<head>
<script>
function showUser(str) {
   
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var responseArray = xmlhttp.responseText.split("||");
                document.getElementById("txtHint").innerHTML = responseArray[0];
                document.getElementById("showmodel").innerHTML = responseArray[1];
                
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
function showModel(str) {
   
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               
               document.getElementById("modele").innerHTML = xmlhttp.responseText;
                
            }
        };
        xmlhttp.open("GET","getmodel.php?r="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
  <?php
   $_SESSION['scompany']="";
$servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
$sql = "SELECT * FROM list GROUP BY company ";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {?>   
<form>
<select name="users" onchange="showUser(this.value)">
    <option>Select</option>
   <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
       
        
        ?>  
    <option value="<?php echo $row['company']; ?>"> <?php echo$row["company"]?></option>
<?php }} ?> 
  
  </select>
</form>
    
<br>
<div id="modele"><b>              </b></div>
 <div id="showmodel"><b>
 
<form>
    <select>
        <option>Select</option>
       
     </select>
</form> 
     </b></div>        


<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>
Run example »
