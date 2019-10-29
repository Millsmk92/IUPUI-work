<?php
//code to declare variables
$title = $author = $isbn = $year = $pages = $price = "";
if (filter_has_var(INPUT_GET, "title")) {
    $title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_GET, "author")) {
    $author = filter_input(INPUT_GET, "author", FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_GET, "isbn")) {
    $isbn = filter_input(INPUT_GET, "isbn", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_GET, "year")) {
    $year = filter_input(INPUT_GET, "year", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_GET, "pages")) {
    $pages = filter_input(INPUT_GET, "pages", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_GET, "price")) {
    $price = filter_input(INPUT_GET, "price", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: Matthew Mills
            Date:   10/11/2019
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Beginning CakePHP</title>
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
                <h2>Beginning CakePHP</h2>
                <form name="" action="beginningcakephp.php" method="post">
                    <table class="bookdetails">
                        <tr>
                            <td style="width: 180px">
                                <img src="www/img/books/cakephp.jpg" alt="Beginning cake PHP" title="Beginning cake PHP" width="150" />
                            </td>
                            <td style="width: 80px">
                                <h4>Title:</h4>
                                <h4>Author</h4>
                                <h4>ISBN:</h4>
                                <h4>Year:</h4>
                                <h4>Pages:</h4>
                                <h4>Price</h4>
                            </td>
                            <td>
                                <!-- textboxes to display book details -->
                                <p><input type="string" name="title" value="<?= $title ?>" size="40" required /></p>
                                <p><input type="string" name="author" value="<?= $author ?>" size="40" required /></p>
                                <p><input type="number" name="isbn" value="<?= $isbn ?>" required /></p>
                                <p><input type="int" name="year" value="<?= $year ?>" required /></p>
                                <p><input type="number" name="pages" value="<?= $pages ?>" required/></p>
                                <p><input type="number" name="price" value="<?= $price ?>" required/><p>
                                <p><input type="number" name="price" step="0.01" value="<?= $price ?>" required/></p>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="UpdateBook">
                    <input type="button" value="Cancel" onclick="window.location.href = 'beginningcakephp.php'">
                </form>
            </div>
            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                &copy; PHP Online Bookstore. All Rights Reserved.
            </div>
        </div>
    </body>
</html>