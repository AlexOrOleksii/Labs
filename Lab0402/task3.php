<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Task 3</h1>

        <style>
        table, th, td {
            border:1px solid black;
            padding: 10px 10px 10px 10px;
        }
        </style>

<?php

    function buildTable($query)
    {
        echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Прізвище</th>";
            echo "<th>Ім'я</th>";
            echo "<th>По батькові</th>";
            echo "<th>Відділ</th>";
            echo "<th>Посада</th>";
            echo "<th>Ід. код</th>";
            echo "<th>Зарплата</th>";
        echo "</tr>";
        while($row = mysqli_fetch_row($query))
        {
            echo "<tr>";
            foreach($row as $value)
            {
                echo "<td>". $value. "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $dbH = null;
    try{
        
        $dbH = mysqli_connect("localhost", "user", "userPass111");
        mysqli_select_db($dbH, "spivrobitnyk");

        $workerRes = mysqli_query($dbH, "SELECT * FROM employee");
        $avgRes = mysqli_query($dbH, "SELECT AVG(salary) AS average FROM employee");

        buildTable($workerRes);
        
        echo "<br>";
        $avgRow = mysqli_fetch_assoc($avgRes);

        $avg = $avgRow['average'];

        echo "Середня зарплатня: ". $avg;

        echo "<h1>Результат</h1>";
        $result = mysqli_query($dbH, "SELECT * FROM employee WHERE salary < ". $avg);
        buildTable($result);
    }
    catch(e)
    {
        die("ПОМИЛКА: ". e);
    }
    finally
    {
        if($dbH)
            mysqli_close($dbH);
    }

?>
    </body>
</html>