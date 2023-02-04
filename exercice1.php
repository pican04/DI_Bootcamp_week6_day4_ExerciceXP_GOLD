<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP1_GOLD</title>
    </head>
    <body>
    <h1>Display Average Temperature</h1>
  <!--Write a PHP script to calculate and display:
-average temperature
-five lowest and highest temperatures-->    
     <?php
        $month_Temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
       
        $table = explode(',',  $month_Temp );
        $total = 0;
       
        $lengthTable = count($table);
       
        foreach($table as $temporaire)
        {
            $total += $temporaire;
        }
        
        $AverageTemperature = $total/$lengthTable;
        echo "The average temperature is : ".$AverageTemperature .""; 
        
        sort($table);
        echo " List of the five lowest temperatures :";
        
        for ($i=0; $i< 5; $i++)
        { 
            echo $table[$i].", ";
        }
       
        echo "List of the five highest temperatures:";
        for ($i=($lengthTable-5); $i< ($lengthTable); $i++)
        {
            echo $table[$i].", ";
        }
    ?>  
    </body>
</html>