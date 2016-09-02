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
        <form method="post" action="rr.php">
<select name='myfield' onchange='this.form.submit()'>
  <option selected>Select</option>
  <option>Coffee</option>
  <option>Tea</option>
</select>
<noscript><input type="submit" value="Submit"></noscript>
</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
