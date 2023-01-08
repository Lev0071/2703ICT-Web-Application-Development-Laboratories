<?php
/*
 * Script to print the prime factors of a single positive integer
 * sent from a form.
 * BAD STYLE: Does not use templates.
 */
namespace wad;
include "includes/defs.php";
include "error.php";

# Set $number to the value entered in the form.
$number = $_GET['number'];

$errorStatus = checkForErrors($number);
$factors = "";

if ($errorStatus->getErrorStatus()){
  //echo $errorStatus->getErrorMessage();
} else {
     # Set $factors to the array of factors of $number.
     $factors = factors($number);
     # Set $factors to a single dot-separated string of numbers in the array.
     $factors = join(" . ", $factors);
}

// # Check $number is nonempty, numeric and between 2 and PHP_MAX_INT = 2^31-1.
// # (PHP makes it difficult to do this naturally; see the manual.)
// if (empty($number)) {
//     //echo "Error: ". MISSING ."\n";
//     $error = new Error(true,"Error: ". MISSING ."\n");
//     var_dump($error);
//     exit;
// } else if (!is_numeric($number)) {
//     //echo "Error: " . NONNUMERIC . ": $number\n";
//     $error = new Error(true,"Error: " . NONNUMERIC . ": $number\n");
//     var_dump($error);
//     exit;
// } else if ($number < 2 || $number != strval(intval($number))) {
//     //echo "Error: " . INVALID . ": $number\n";
//     $error = new Error(true,"Error: " . INVALID . ": $number\n");
//     var_dump($error);
//     exit;
// } else {
//     # Set $factors to the array of factors of $number.
//     $factors = factors($number);
//     # Set $factors to a single dot-separated string of numbers in the array.
//     $factors = join(" . ", $factors);
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Factors</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/wp.css">
  </head>
  
  <body>  
    <h1>Factorisation</h1>

    <?php if ($errorStatus->getErrorStatus()){ ?>
       <p class="alert"><?= $errorStatus->getErrorMessage() ?></p>
    <?php }  else {?>

    <p><?php echo "$number = $factors"; ?></p>
    <?php } ?>
    <!-- <p><a href="index.html">Another?</a></p>
    <hr> -->
    <p>

    <h2>Another factorisation</h2>
    <form method="get" action="factorise.php">
      <p>Number to factorise: <input type="text" name="number" value="<?= $number ?>">
      <p><input type="submit" value="Factorise it!">
    </form>

    Sources:
    <a href="show.php?file=factorise.php">factorise.php</a>
    <a href="show.php?file=includes/defs.php">includes/defs.php</a>
    </p>
  </body>
</html>
