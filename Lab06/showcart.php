<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: Louie Zhu
            Date:   10/2/2014
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shopping cart content</title>
         <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />

    </head>

    <body>
        <?php
        //Define constants for book prices and quantities
        define("BEGINNING_CAKEPHP_PRICE", 28.99);
        define("PHP_BIBLE_PRICE", 24.99);
        $beginning_cakephp_qty = 2;
        $php_bible_qty = 1;
        ?>
        <div id="wrapper">
            <!-- navigation bar -->
            <div id="navbar">
                <a href="index.php">Home</a>  || <a href="books.php">List Books</a> ||
            </div>

            <!-- Logo image and banner text --> 
            <table id="banner">
                <tr>
                    <td>
                        <img src="www/img/bookstore.gif" alt="Bookstore">
                    </td>
                    <td>
                        <div id="maintitle">PHP Online Bookstore</div>
                        <div id="subtitle">Learn how to build an online bookstore <br>with PHP and MySQL</div>
                    </td>
                    <td>
                        <div id="shoppingcart">
                            <a href="showcart.php">
                                <img src='www/img/shoppingcart_full.gif' alt='Shopping cart' style='width: 50px; border: none'><br>
                                3 item(s)
                            </a>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Main body of content -->
            <div id="mainbody">
                <h2> My Shopping Cart</h2>
                <!-- add your code here to display shopping cart content in a table -->
                <table border='1' cellspacing='0' cellpadding='5'>
                    <tr>
                        <th width="300">Title</th>
                        <th width="60">Price</th>
                        <th width="60">Quantity</th>
                        <th width="60">Total</th>
                    </tr>
                    <tr>
                        <td>Beginning CakePHP</td>
                        <td>$<?php echo BEGINNING_CAKEPHP_PRICE ?></td>
                        <td><?php echo $beginning_cakephp_qty ?></td>
                        <td>$<?php echo BEGINNING_CAKEPHP_PRICE * $beginning_cakephp_qty ?></td>
                    </tr>
                    <tr>
                        <td>PHP Bible</td>
                        <td>$<?php echo PHP_BIBLE_PRICE ?></td>
                        <td><?php echo $php_bible_qty ?></td>
                        <td>$<?php echo PHP_BIBLE_PRICE * $php_bible_qty ?></td>
                    </tr>
                </table>
            </div>

            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                <p>&copy; PHP Online Bookstore. All Rights Reserved.</p>
            </div>
        </div>
    </body>
</html>