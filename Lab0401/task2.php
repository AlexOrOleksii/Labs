<h1>Завдання 2</h1>

<form action="task2.php" method="get">
R: <input type="text" name="r"><br>
H: <input type="text" name="h"><br>
<input type="submit">
</form>

<p>
<?php
    if($_GET) {
        $r = intval($_GET["r"]);
        $h = intval($_GET["h"]);

        echo "V = (1 / 3) * pi * r^2 * h = ";
        echo ((1.0 / 3.0) * pi() * $r * $r * $h);
    }
?>
</p>