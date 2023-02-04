<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP2_GOLD</title>
    </head>
    <body>
    <h1>Replace The First</h1>
  <!--Write a PHP script to replace the first ‘the’ of the following string with ‘best’-->    
     <?php
            $str = 'Techstudy - the Debugging Solution website';
            
            echo preg_replace('/the/', 'best', $str, )."\n"; 
        ?>
    </body>
</html>