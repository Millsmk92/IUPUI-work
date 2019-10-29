<?php
$name = $zipcode = $gender = $email = $os = $newsletter = $info = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    if (!filter_input(INPUT_POST, "zipcode", FILTER_VALIDATE_INT)) {
        echo "The zipcode you provided is invalid.";
    } else {
        $zipcode = filter_input(INPUT_POST, "zipcode", FILTER_SANITIZE_NUMBER_INT);
    }
    $gender = $_POST['gender'];
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $os = $_POST['os'];
    if (filter_has_var(INPUT_POST, "newsletter")) {
        $newsletter = $_POST['newsletter'];
    } else {
        $newsletter = "No";
    }
    $info = filter_input(INPUT_POST, "info", FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration Confirmation</title>
        <style type="text/css">

            td.leftcol {
                width: 120px;
                text-align: right;
                font-weight: 600;

            }

        </style>
    </head>

    <body style="padding-left: 50px">
        <h2>Registration Confirmation Page</h2>

        <p>Thank you for your registration. Below is what you submitted.</p>
        <table width='550' border='2' cellspacing='0' cellpadding='5' rules='none' frame='box'>
            <tr>
                <td class='leftcol'>Name:</td>
                <td><?php echo $name ?>  </td>
            </tr>
            <tr>
                <td class='leftcol'>Zip code:</td>
                <td><?php echo $zipcode ?></td>
            </tr>
            <tr>
                <td class='leftcol'>Gender:</td>
                <td><?php echo $gender ?>  </td>
            </tr>
            <tr>
                <td class='leftcol'>Email:</td>
                <td><?php echo $email ?>  </td>
            </tr>
            <tr>
                <td class='leftcol'>Operating systems:</td>
                <td><?php echo $os ?>  </td>
            </tr>

            <tr>
                <td class='leftcol'>Newsletter?</td>
                <td><?php echo $newsletter ?>  </td>
            </tr>
            <tr>
                <td class='leftcol'>Information about yourself:</td>
                <td><?php echo $info ?>  </td>
            </tr>

        </table>
    </body>
</html>