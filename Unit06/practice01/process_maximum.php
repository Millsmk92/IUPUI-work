<?php
if (filter_has_var(INPUT_POST, "num1") && filter_has_var(INPUT_POST, "num2") && filter_has_var(INPUT_POST, "num3")) {
    $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_INT);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_INT);
    $num3 = filter_input(INPUT_POST, "num3", FILTER_SANITIZE_NUMBER_INT);
} else {
    $num1 = $num2 = $num3 = "";
}

function getMaximim($num1, $num2, $num3) {
    $max = $num1;
    if ($num2 > $max) {
        $max = $num2;
    }
    if ($num3 > $max) {
        $max = $num3;
    }

    //display maximum
    //echo "that maximum is $max."
    return $max;
}
    ?>

