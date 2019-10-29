<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>"Tuition Calculator"</title>
    </head>
    <body>
        <h2>Tuition Calculator</h2>
        <?php
        // put your code here
        define("GRADUATE_RATE", 350);
        define("UNDER_RATE", 280);
        define("DISCOUNT", 0.30);
        $is_Graduate = false;
        $is_IndianaResident = true;
        $num_credit_hours = 15;
        $tuition = $is_Graduate ? $num_credit_hours * GRADUTE_RATE : $num_credit_hours * UNDER_RATE;
        $tuition = $is_IndianaResident ? $tuition * (1 - DISCOUNT) : $tuition;
        echo "Your rate: ", $is_Graduate ? GRADUATE_RATE : UNDER_RATE;
        echo "<br>Indiana resident: ", $is_IndianaResident ? "Yes" : "No";
        echo "<br>Number of credit hours: $num_credit_hours";
        echo "<br>Your tution: \$", $tuition;
        ?>
    </body>
</html>
