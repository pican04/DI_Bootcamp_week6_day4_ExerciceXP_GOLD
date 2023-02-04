<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP3_GOLD</title>
    </head>
    <body>
    <h1>The Shortest-Longest</h1>
     <!--Write a PHP script to get the shortest/longest string length from an array-->    
<?php
 
        $my_array = array("bmw","jeep","dastun","ferrari","Honda");
        
        $new_array = array_map('strlen', $my_array);
        
        echo "The shortest array length is " . min($new_array) .". The longest array length is " . max($new_array).'.';
    ?>   
    </body>
</html>