<h1>Завдання 5</h1>

<form action="task5.php" method="get">
Масив (1 2 3 4): <input type="text" name="arr"><br>
k: <input type="text" name="k"><br>
<input type="submit">
</form>

<p>
<?php
    if($_GET && $_GET["arr"] && $_GET["k"]) {
    
        $k = intval($_GET["k"]);
        $arr = explode(" ", strval($_GET["arr"]));
        $len = count($arr);

        for($i = 0; $i < $k; $i++)
        {
            array_shift($arr);
            $len = count($arr);
        }

        foreach($arr as $val)
        {
            echo $val, " ";
        }
    }

?>
</p>