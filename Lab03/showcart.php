<?php
/*
 * Author: Matthew Mills
 * Date: 9/22/19
 * File: showcart.php
 * Description: This script displays shopping cart content in a table.
 * 
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Books in Our Store</title>
        <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />
    </head>
    <body>
        <?php
        // put your code here
        define("BEGINNING_CAKEPHP_PRICE", 28.99);
        define("PHP_BIBLE_PRICE", 24.99);
        $beginning_cakephp_qty = 2;
        $php_bible_qty = 1;
        $total1 = BEGINNING_CAKEPHP_PRICE * $beginning_cakephp_qty;
        $total2 = PHP_BIBLE_PRICE * $php_bible_qty;
        ?>
        <div id="wrapper">
            <!-- navigation bar -->
            <div id="navbar">
                <a href="index.html">Home</a>  || <a href="books.html">List Books</a> ||
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
                <table class="booklist" border="0">
                    <thead>
                        <tr>
                            <th width="70%">Title</th>
                            <th width="10%">Price</th>
                            <th width="10%">Quantity</th>
                            <th width="10%">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo "Beginning CakePHP" ?></td>
                            <td>$<?php echo BEGINNING_CAKEPHP_PRICE ?></td>
                            <td><?php echo $beginning_cakephp_qty ?></td>
                            <td>$<?php echo $total1 ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "PHP Bible" ?></td>
                            <td>$<?php echo PHP_BIBLE_PRICE ?></td>
                            <td><?php echo $php_bible_qty ?></td>
                            <td>$<?php echo $total2 ?></td>
                        </tr>
                    </tbody>
                </table>

                </table>
                <!-- add your code here to display shopping cart content in a table -->

            </div>

            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                <p>&copy; PHP Online Bookstore. All Rights Reserved.</p>
            </div>
        </div>
    </body>
</html>
