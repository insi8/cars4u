<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    

//get the q parameter from URL
$q=$_GET["q"];
$servername = "localhost";
$username = "root";
$fpassword = "";
$dbname = "oui";
 

$con = new mysqli($servername, $username, $fpassword, $dbname);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  
  $sql="SELECT company FROM list WHERE company LIKE '%$q%'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)) {
    if($hint==="")
    {
    $hint=$row['company'];
    }
 else {
    $hint=$hint."<br>".$row['company'];    
    }
}
  
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
        // put your code here
        ?>
    </body>
</html>
