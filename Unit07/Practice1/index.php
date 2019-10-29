<?php
//Generate an array of 30 temperatures: random numbers between 50 and 75
$temperatures = array();
while (count($temperatures) <= 30) {
    $temperatures[] = rand(50, 75);
}

//this function determines the average temperature
function getAverage($temps) {
    $average = $total = "";
    
    foreach ($temps as $temp) {
        $total += $temp;
    }
    $average = (float) $total / count($temps);
    return $average;
}

//this function detemines the highest temperature
function getMax($temps) {
    $max = $temps[0];

    foreach ($temps as $temp) {
        $max = ($temp > $max) ? $temp : $max;
    }
    return $max;
}
//this function detemines the lowest temperature
function getMin($temps) {
    $min = $temps[0];
    foreach ($temps as $temp) {
        $min = ($temp < $min) ? $temp : $min;
    }
    return $min;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Monthly Temperature Statistics</h2>
        <?php
        //display all temperatures
        echo "Daily average temperature readings: ";
        for ($i = 0; $i < count($temperatures); $i++) {
            echo $temperatures[$i], " ";
        }

        // display average temperature
        printf("<p>The average temperature of the month: %.1f.</p>", getAverage($temperatures));
        echo "<p>The highest temperature of the month: ", getMax($temperatures), ".</p>";
        echo "<p>The lowest temperature of the month: ", getMin($temperatures), ".</p>";
        ?>
    </body>
</html>

