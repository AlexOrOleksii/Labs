<h1>Завдання 4</h1>

<form action="task4.php" method="get">
<input type="text" name="val"><br>
<input type="submit">
</form>

<p>
<?php
    if($_GET && $_GET["val"]) {
        $val = strval($_GET["val"]);
        $len = strlen($val);
        $halfLen = $len / 2;

        for($i = 0; $i <= $halfLen; $i++) {
            if($val[$i] != $val[$len - $i - 1]) {
                echo $val, " не є паліндромом";
                exit();
            }
        }
        echo $val, " є паліндромом";
    }
?>
</p>