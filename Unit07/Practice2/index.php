<?php
// Initialize string and array
//text typed in the textarea
$string = "To be, or not to be: that is the question.";
//array of all characters; charaters are keys and frequencies are values;
$chars = array();

//retrieve text from the textarea
if (filter_has_var(INPUT_POST, "string")) {
    $string = filter_input(INPUT_POST, "string");
}

//the for loop extracts one char at a time from the string
for ($i = 0; $i < strlen($string); $i++) {
    $char = strtolower(substr($string, $i, 1));
    if (array_key_exists($char, $chars)) {
        $chars[$char] ++;
    } else if (ctype_alpha($char) || is_numeric($char)) {
        $chars[$char] = 1;
    }
}
ksort($chars);

//sort the array by keys; to sort by values, use asort()
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h2>Frequencies of Characters</h2>
        <p>Type your text into the textarea, then click on the Submit button.</p>
        <form method="post" action="index.php">
            <textarea rows="10" cols="60" name="string"><?= $string ?></textarea>
            <input type="submit" value="Submit">
        </form>


        <p><strong>Frequencies of alphanumeric characters:</strong><p>
<?php
foreach ($chars as $key => $char) {
    echo "$key: $char<br>";
}
?>

    </body>
</html>
