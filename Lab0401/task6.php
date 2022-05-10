<h1>Завдання 6</h1>

<form action="task6.php" method="get">
Масив (1 2 3 4): <input type="text" name="arr"><br>
<input type="submit">
</form>

<p>
<?php
    if($_GET && $_GET["arr"]) {
        $arr = explode(" ", strval($_GET["arr"]));
        $len = count($arr);

        if(!$len)
            exit();

        $max = $arr[0];

        foreach($arr as $val)
        {
            $max = max($max, $val);
        }

        echo "Max: ", $max;
    }
?>
</p>