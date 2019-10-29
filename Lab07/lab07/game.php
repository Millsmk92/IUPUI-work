<?php
$title = "Guessing the number game";
require('includes/header.php');
$message = "";
//defining compare integers function
function compare_integers($int1, $int2) {
    $result = "";
    if ($int1 < $int2) {
        $result = "-1";
    } else if 
    ($int1 > $int2) {
        $result = "1";
    } else {
        $result = "0";
    }
    return $result;
}
//
if (filter_has_var(INPUT_POST, "random")) {
    $random = filter_input(INPUT_POST, "random", FILTER_SANITIZE_NUMBER_INT);
} else {
    $random = rand(1, 20);
}
//Checking if guess exists and calling our function
if (filter_has_var(INPUT_POST, "guess")) {
    $guess = filter_input(INPUT_POST, "guess", FILTER_SANITIZE_NUMBER_INT);

if ($guess >= 1 AND $guess <= 20) {
    $userG = compare_integers($guess, $random);
    if ($userG == "-1") {
        $message = "You're guess '$guess' was too low.";
    } else if ($userG == "1") {
        $message = "You're guess '$guess' was too high.";
    } else if ($userG == "0") {
    $message = "Congratulations! You guessed the hidden number!!!";}
    } else {
        $message = "Invalid guess. Please enter a number between 1 and 20.";
    }
}

?>

<!-- page specific content starts -->
<h2>Guessing the Number</h2>
<p>Enter a number between 1 and 20, then press the Guess button.</p>
<form action="game.php" method="post">
    <p>
        <input type="number" name="guess" required />&nbsp;&nbsp;
        <input type="submit" value=" Guess " />
    </p>
 <?php echo $random ?>
    <!-- this hidden field is used to store the system generated random number -->
    <input type="hidden" name="random" value="<?php $random ?>" />
</form>
<!-- page specific content ends -->
<!--echoing message value-->

<?php echo "<font color='red'> $message </font>" ?>
<?php
require('C:/xampp/htdocs/I210/Lab07/lab07/includes/footer.php')
?>