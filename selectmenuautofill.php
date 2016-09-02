<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>jQuery UI Autocomplete functionality</title>
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <!-- Javascript -->
    
   </head>
   <body>
       
       
         <script>
         $(function() {
            var availableTutorials = [
               "ActionScript",
               "Boostrap",
               "C",
               "C++",
               
               "wagonar",
               "woganar",
               "wyganaer",
               "wzzzz",
            ];
            $( "#automplete-1" ).autocomplete({
               source: availableTutorials
            });
         });
      </script>
      <!-- HTML --> 
      <div class="ui-widget">
         <p>Type "a" or "s"</p>
         <label for="automplete-1">Tags: </label>
         <input id="automplete-1">
      </div>
   </body>
</html>
