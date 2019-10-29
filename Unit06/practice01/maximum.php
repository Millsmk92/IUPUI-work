<?php  require_once ('process_maximum.php');  ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

            <title>Maximum Finder</title>
        </head>

        <body>

            <h2>Maximum Finder</h2>
            <h3>Enter three numbers and press the Find button.</h3>

            <form name = "" action = "maximum.php" method = "post">
                <input type = "number" name = "num1" value=<?= $num1 ?> required />
                <input type = "number" name = "num2" value=<?= $num2 ?>  required />
                <input type = "number" name = "num3" value=<?= $num3 ?>  required />

                <input type = "submit" value = "Find" />
            </form>
            <?php
            $maximum = getMaximim($num1, $num2, $num3);
            if ($maximum != " ")
                echo "The maximum is $maximum.";
            ?>
    </body>
</html>