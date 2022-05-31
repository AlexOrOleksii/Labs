<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Task 1</h1>
        <form method="GET">
            <input type="text" name="strInput">
            <input type="submit">
        </form>

<?php
    if(!empty($_GET) && $_GET["strInput"]) {   
        $val = $_GET["strInput"];
        $arr = str_split($val);
        $ch = end($arr);
        array_unshift($arr, $ch);
        array_pop($arr);

        echo implode("", $arr);
    }
?>

    </body>



</html>