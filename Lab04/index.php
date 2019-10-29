<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/*
 * Author: Matthew Mills
 * Date: 9/27/2019
 */

//variables for frequency of die face
$frequency1 = 0;
$frequency2 = 0;
$frequency3 = 0;
$frequency4 = 0;
$frequency5 = 0;
$frequency6 = 0;
?>
<html>
    <style>

    </style>
    <head>
        <meta charset="UTF-8">
        <title>Statistical analysis of results from rolling a six-sided die</title>
    </head>
    <body style="text-align:center">
        <h2 align="center">Statistical Analysis of Results from Rolling a Six-sided Die</h2>
        <?php
        // put your code here
        //For loop to repeatedly roll die to 5000 rolls
        for ($RollCount = 0; $RollCount < 5001; $RollCount++) {
            //Generate random die face
            $face = rand(1, 6);
            //Conditional to increment frequency for each face occurence
            if ($face == 1)
                $frequency1++;
            else if ($face == 2)
                $frequency2++;
            else if ($face == 3)
                $frequency3++;
            else if ($face == 4)
                $frequency4++;
            else if ($face == 5)
                $frequency5++;
            else
                $frequency6++;
        }
        ?>
        <table border="2" width="400" height="300" align=center>
            <thead>
                <tr>
                    <th>Face</th>
                    <th>Frequency</th>
                </tr>
            </thead>

            <tr>
                <td align="center">1</td>
                <td align="center"><?php echo $frequency1 ?></td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td align="center"><?php echo $frequency2 ?></td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td align="center"><?php echo $frequency3 ?></td>
            </tr>
            <tr>
                <td align="center">4</td>
                <td align="center"><?php echo $frequency4 ?></td>
            </tr>
            <tr>
                <td align="center">5</td>
                <td align="center"><?php echo $frequency5 ?></td>
            </tr>
            <tr>
                <td align="center">6</td>
                <td align="center"><?php echo $frequency6 ?></td>
            </tr>

        </table>

    </body>
    <input align="right" type="submit" value="Refresh" onclick="window.location.reload()"/>
</html>
