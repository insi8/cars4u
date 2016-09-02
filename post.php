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
       
        
// Fetching Values From the post method
$username = $_POST['date'];

 $_SESSION["strigger"]=$username;
        // put your code here
        ?>
        <?php $r= $_SESSION["strigger"] ?>
        <?php echo $r ?>
    </body>
</html>
