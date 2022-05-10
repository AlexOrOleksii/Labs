<h1>Завдання 7</h1>

<?php
    echo "<table>";

    $minVal = 100;
    $indexX = 0;
    $indexY = 0;

    for($i = 0; $i < 6; $i++)
    {  
        echo "<tr>";
        for($j = 0; $j < 4; $j++)
        {
            $val = rand(-100, 100);

            if($val < $minVal)
            {
                $minVal = $val;
                $indexX = $j;
                $indexY = $i;
            }

            echo "<td>";
            echo $val;
            echo "</td>"; 
        }  
        echo "</tr>";  
    }
    echo "</table>";

    echo "FR(4, 6) min: ", $minVal, " X: ", $indexX, " Y: ", $indexY;
    
?>
