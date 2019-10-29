<?php
$title = "Beginning CakePHP";
$author = "David Golding";
$isbn = "1430209771";
$year = "2008";
$pages = "344";
$price = "28.99";
//code to declare variables
if (filter_has_var(INPUT_POST, "title")) {
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_POST, "author")) {
    $author = filter_input(INPUT_POST, "author", FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_POST, "isbn")) {
    $isbn = filter_input(INPUT_POST, "isbn", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_POST, "year")) {
    $year = filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_POST, "pages")) {
    $pages = filter_input(INPUT_POST, "pages", FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_POST, "price")) {
    $price = filter_input(INPUT_POST, "price", FILTER_FLAG_ALLOW_FRACTION);
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
		<table class="bookdetails">
                    <tr>
                        <td style="width: 180px">
                            <img src="www/img/books/cakephp.jpg" alt="Beginning cake PHP" title="Beginning cake PHP" width="150" />
                        </td>
                        <td style="width: 80px">
                            <h4>Title:</h4>
                            <h4>Author:</h4>
                            <h4>ISBN:</h4>
                            <h4>Year:</h4>
                            <h4>Pages:</h4>
                            <h4>Price:</h4>
                        </td>
                        <td>
                            <p><?= $title ?></p>
                            <p><?= $author ?></p>
                            <p><?= $isbn ?></p>
                            <p><?= $year ?></p>
                            <p><?= $pages ?></p>
                            <p><?= $price ?></p>
                        </td>
                    </tr>
                </table>
                <?php
                    $url = "edit_beginningcakephp.php?title=$title&author=$author&isbn=$isbn&year=$year&pages=$pages&price=$price";
                ?>
                <input type="button" value="Edit Book" onclick="window.location.href='<?= $url ?>'">
                <input type="button" value="Cancel" onclick="window.location.href='books.php'"> 
            </div>
            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                &copy; PHP Online Bookstore. All Rights Reserved.
            </div>
        </div>
    </body>
</html>
