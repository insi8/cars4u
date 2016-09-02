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
        
///////// Database Details , add  here  ////
$dbhost_name = "localhost";
$database = "oui";  // Your database name
$username = "root";                  //  Login user id 
$password = "";                  //   Login password
/////////// End of Database Details //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

?> 
    </body>
</html>
