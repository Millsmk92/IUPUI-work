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
        <h2>Books in our inventory</h2>
        <p><a href="bookdetails.php?title=PHP Bible&image=phpbible.jpg">PHP Bible</a></p>
        <p><a href="bookdetails.php?title=Beginning CakePHP&image=cakephp.jpg">Beginning CakePHP</a></p>
        <?php
        // put your code here
        $title = "Intermediate Accounting";
        $image = "accounting.jpg";
        $url = "bookdetails.php?title=$title&image=$image";
        ?>
        <a href ="<?= $url?>" title="<?= $title ?>"><?= $title ?></a>
        <p><input type ="submit" value="Intermediate Accounting"
                  onclcik="window.location.href='<?= $url; ?>'"></p>
    </body>
</html>
