<?php
if (!ctype_digit($_GET['day']) || !ctype_digit($_GET['month']) || !ctype_digit($_GET['year'])  ) {
    header("Location: invoer.html");
}
$day = (int) $_GET['day'];
$month = (int) $_GET['month'];
$year = (int) $_GET['year'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Verwerk</title>
</head>
<body>
<?php
require_once "vendor/autoload.php";
use Util\Date;
use Util\DateException;

try{
    $date = new Date($day, $month, $year);
    $date->printMonth();
} catch (DateException $dateException){
    var_dump($dateException);
}
?>
</body>
</html>
