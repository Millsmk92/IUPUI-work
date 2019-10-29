<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_STRING);
        $image = filter_input(INPUT_GET, "image", FILTER_SANITIZE_STRING);
        ?>
        <h2><?= $title ?></h2>
        <img src="images/<?=$image ?>" style ="width:200px"/>
    </body>
</html>
