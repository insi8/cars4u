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
        define('_HOST_NAME', 'localhost');
    define('_DATABASE_USER_NAME', 'root');
    define('_DATABASE_PASSWORD', '');
    define('_DATABASE_NAME', 'list');
	
    $dbConnection = new mysqli(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);
    if ($dbConnection->connect_error) {
        trigger_error('Connection Failed: '  . $dbConnection->connect_error, E_USER_ERROR);
    }
        // put your code here
        ?>
    </body>
</html>
