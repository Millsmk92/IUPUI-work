<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: Louie Zhu
            Date:   10/2/2014
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PHP Online Bookstore Home</title>
        <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />
    </head>

    <body>
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
                <h2>Welcome to PHP Online Bookstore</h2>
                <p>This web site demonstrates a simple shopping cart application. It uses   sessions to maintain states. Click links at the top navigation bar to try different features. The   shopping cart content can be displayed by clicking the link at the   upper-right corner.</p>
                <p>Major features include:</p>
                <ul>
                    <li>List books</li>
                    <li>Search books with keywords in book titles</li>
                    <li>Login/logout</li>
                    <li>Register/create new accounts</li>
                    <li>Add new books (administrators only)</li>
                </ul>
            </div>

            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                <p>&copy; PHP Online Bookstore. All Rights Reserved.</p>
            </div>
        </div>
    </body>
</html>
