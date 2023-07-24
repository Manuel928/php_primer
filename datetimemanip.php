<?php
$title = 'Date Time Manipulation';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php
date_default_timezone_set('UTC');
$datenow = getdate();

echo "Todays's date: " . "<br>";
echo $datenow['mday'] . "th - " . $datenow['month'] . " - " . $datenow['year'] . '<br>';

echo date('l jS F, Y h:i:s');


?>
<?php require 'includes/footer.php' ?>