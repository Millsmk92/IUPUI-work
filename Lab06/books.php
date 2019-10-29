<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: Louie Zhu
            Date:   10/2/2014
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Books in Our Store</title>
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
                <h2>Books in Our Store</h2>
                <table class="booklist">
                    <tr>
                        <th>Title</th>
                        <th style="width:250px">Author</th>
                        <th style="width:150px">ISBN</th>
                        <th style="width:60px">Price</th>
                    </tr>
                    <tr>
                        <td><a href="beginningcakephp.php">Beginning Cake PHP</a></td>
                        <td>David Golding</td>
                        <td>1430209771</td>
                        <td>$28.99</td>
                    </tr>
                    <tr>
                        <td>PHP Bible, 2nd Edition</td>
                        <td>Tim Converse, Joyce Park </td>
                        <td>978-0-7645-4955-7</td>
                        <td>$24.99</td>
                    </tr>
                    <tr>
                        <td>PHP and MySQL Web Development</td>
                        <td>Luke Welling, Laura Thomson</td>
                        <td>9780672329166</td>
                        <td>$34.64</td>
                    </tr>
                    <tr>
                        <td>Intermediate Accounting</td>
                        <td>Donald Kieso</td>
                        <td>9780470374948</td>
                        <td>$128.99</td>
                    </tr>
                    <tr>
                        <td>Calculus</td>
                        <td>Ron Larson</td>
                        <td>0547167024</td>
                        <td>$139.99</td>
                    </tr>
                </table>
            </div>

            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                &copy; PHP Online Bookstore. All Rights Reserved.
            </div>
        </div>
    </body>
</html>