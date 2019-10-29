<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/*
 * Author: Matthew Mills
 * 10/3/2019
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Drawing a Pattern with Nested Loops</title>
    </head>
    <body>
        <h2>Drawing a Pattern with Nested Loops</h2>
        <input align="left" type="submit" value="Refresh" onclick="window.location.reload()"/>
        <BR>
        <?php
        //Establishing values for row and column

        $patternRow = rand(1, 20);



        //Nested loops to draw pattern
        for ($i = 1; $i <= $patternRow; $i++) {
            echo"<br>";
            for ($patternCol = 1; $patternCol <= $i; $patternCol++) {
                echo"<span style='color:white'>* </span>";
                //echo"<br>";
                }
                for ($patternCol = 1; $patternCol <= $patternRow-$i+1; $patternCol++) {
                    echo"* ";
            }
        }
        ?>
    </body>
</html>
