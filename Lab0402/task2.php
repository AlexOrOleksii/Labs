<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Task 2</h1>
        <form method="GET">
            <input type="text" name="strInput">
            <input type="submit">
        </form>
        
<?php
    if(!empty($_GET) && $_GET["strInput"]) {   
        $val = $_GET["strInput"];
        $arr = explode(" ", $val);

        $sum = 0;
        $count = count($arr);
        for($i = 0; $i < $count; $i++)
        {
            $val = intval($arr[$i]);
            if($val > 0 && ($i + 1) % 2)
                $sum += $val;
        }

        echo $sum;
    }
?>
    </body>
</html>